<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class RazorpayPaymentController extends Controller
{
    /**
     * Write code on Method
     *
     *

     * @return response()
     */
    public function index(): View
    {
        return view('razorpay');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(!empty($input['razorpay_payment_id'])) {

            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])
                                         ->capture(['amount'=>$payment['amount']]);

            } catch (Exception $e) {
                return redirect()->back()
                                 ->with('error', $e->getMessage());
            }

        }

        return redirect()->back()
                         ->with('success', 'Payment successful');
    }

    // PhonePe Integration
    // public function makePhonePePayment(Request $request)
    // {
    //     $amount = session()->get('phonepe_amount') ?? 100;
    //     $data = array (
    //       'merchantId' => 'MERCHANTUAT',
    //       'merchantTransactionId' => 'MT7850590068188103',
    //       'merchantUserId' => 'MUID123',
    //       'amount' => $amount * 100,
    //       'redirectUrl' => route('phonepay.payment-callback'),
    //       'redirectMode' => 'POST',
    //       'callbackUrl' => route('phonepay.payment-callback'),
    //       'mobileNumber' => '9999999999',
    //       'paymentInstrument' =>
    //       array (
    //         'type' => 'PAY_PAGE',
    //       ),
    //     );

    //     $encode = base64_encode(json_encode($data));

    //     $saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
    //     $saltIndex = 1;

    //     $string = $encode.'/pg/v1/pay'.$saltKey;
    //     $sha256 = hash('sha256',$string);

    //     $finalXHeader = $sha256.'###'.$saltIndex;

    //     // $response = Curl::to('https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay')
    //     //         ->withHeader('Content-Type:application/json')
    //     //         ->withHeader('X-VERIFY:'.$finalXHeader)
    //     //         ->withData(json_encode(['request' => $encode]))
    //     //         ->post();
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //       CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay',
    //       CURLOPT_RETURNTRANSFER => true,
    //       CURLOPT_ENCODING => '',
    //       CURLOPT_MAXREDIRS => 10,
    //       CURLOPT_TIMEOUT => 0,
    //       CURLOPT_FOLLOWLOCATION => false,
    //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //       CURLOPT_CUSTOMREQUEST => 'POST',
    //       CURLOPT_POSTFIELDS => json_encode(['request' => $encode]),
    //       CURLOPT_HTTPHEADER => array(
    //         'Content-Type: application/json',
    //         'X-VERIFY: '.$finalXHeader
    //       ),
    //     ));

    //     $response = curl_exec($curl);

    //     curl_close($curl);

    //     $rData = json_decode($response);

    //     return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);

    // }

    public function makePhonePePayment(Request $request)
    {
        $amount = session()->get('phonepe_amount') ?? 100;
        $data = array (
          'merchantId' => 'MERCHANTUAT',
          'merchantTransactionId' => 'MT7850590068188103',
          'merchantUserId' => 'MUID123',
          'amount' => $amount * 100,
          'redirectUrl' => route('phonepe.payment-callback'),
          'redirectMode' => 'POST',
          'callbackUrl' => route('phonepe.payment-callback'),
          'mobileNumber' => '9999999999',
          'paymentInstrument' =>
          array (
            'type' => 'PAY_PAGE',
          ),
        );

        $encode = base64_encode(json_encode($data));

        $saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
        $saltIndex = 1;

        $string = $encode.'/pg/v1/pay'.$saltKey;
        $sha256 = hash('sha256',$string);

        $finalXHeader = $sha256.'###'.$saltIndex;

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode(['request' => $encode]),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'X-VERIFY: '.$finalXHeader
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        Log::info('PhonePe API Response: ' . $response);

        $rData = json_decode($response);

        if (isset($rData->data) && isset($rData->data->instrumentResponse->redirectInfo->url)) {
            return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);
        } else {
            Log::error('Unexpected API Response Structure: ', (array) $rData);
            return response()->json(['error' => 'Unexpected API response structure'], 500);
        }
    }

    public function phonePeCallback(Request $request)
    {
        $input = $request->all();

        $saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
        $saltIndex = 1;

        $finalXHeader = hash('sha256','/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'].$saltKey).'###'.$saltIndex;

        // $response = Curl::to('https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'])
        //         ->withHeader('Content-Type:application/json')
        //         ->withHeader('accept:application/json')
        //         ->withHeader('X-VERIFY:'.$finalXHeader)
        //         ->withHeader('X-MERCHANT-ID:'.$input['transactionId'])
        //         ->get();

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'],
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'accept: application/json',
            'X-VERIFY: '.$finalXHeader,
            'X-MERCHANT-ID: '.$input['transactionId']
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        dd(json_decode($response));
        // flash(translate('Your order has been placed successfully. Please submit payment information from purchase history'))->success();
        // return redirect()->route('order_confirmed');
    }
}
