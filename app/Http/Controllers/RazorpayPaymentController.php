<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\MemberController;
use App\Http\Controllers\User\ProfileController;
use App\Models\Profile;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Exception;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

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
        $phonepeSession = session()->get('phonepe');
            //  'amount' => $purchasePlan->price * 100,
            //     'profile_id' => $profile->id,
            //     'profile_uuid' => $profile_uuid,
            //     'purchased_profile_id' => $purchased_profile_id,
            //     'purchased_profile_uuid' => $purchased_profile_uuid,
            //     'plan_id' => $purchasePlan->id,
            //     'redirect' => route('phonepe.payment')

        $phonepeConfig = config('phonepe');
        $data =  $phonepeConfig['js_configuration'];
        $data['amount'] = 100;//$phonepeSession['amount'] ?? 1;
        $data['merchantTransactionId'] = "ID".auth()->user()->id."PP".$phonepeSession['purchased_profile_id'].date("dmyhis");
        $data['merchantUserId'] = "ID".auth()->user()->id;

        $data['redirectUrl'] = route('phonepe.payment-callback');
        $data['callbackUrl'] = route('phonepe.payment-callback');
        $data['mobileNumber'] = $phonepeSession['mobile_number']?? '9999999999';
        
        // $data = array (
        //   'merchantId' => 'PGTESTPAYUAT86',
        //   'merchantTransactionId' => 'MT7850590068188103',
        //   'merchantUserId' => 'MUID1231',
        //   'amount' => $phonepe_amount * 100,
        //   'redirectUrl' => route('phonepe.payment-callback'),
        //   'redirectMode' => 'POST',
        //   'callbackUrl' => route('phonepe.payment-callback'),
        //   'mobileNumber' => '8807890169',
        //   'paymentInstrument' =>
        //   array (
        //     'type' => 'PAY_PAGE',
        //   ),
        // );
//dd($data);
        $encode = base64_encode(json_encode($data));

        $saltKey = $phonepeConfig['salt_key'];
        $saltIndex = $phonepeConfig['salt_index'];

        $string = $encode.'/pg/v1/pay'.$saltKey;
        $sha256 = hash('sha256', $string);


        $finalXHeader = $sha256.'###'.$saltIndex;

        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => $phonepeConfig['url']."/pg/v1/pay",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode(['request' => $encode]),
          CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'X-VERIFY: '.$finalXHeader
          ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
//dd( $response, $data,$phonepeConfig['url']."/pg/v1/pay");
        Log::info('PhonePe API Response: ' . $response);

        $rData = json_decode($response);

        if (isset($rData->data) && isset($rData->data->instrumentResponse->redirectInfo->url)) {
            return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);
        } else {
            Log::error('Unexpected API Response Structure: ', (array) $rData);
            dd($rData);
            return response()->json(['error' => 'Unexpected API response structure'], 500);
        }
    }

    public function phonePeCallback(Request $request)
    {
      $input = $request->all();
      //dd( $input);
      $phonepeSession = Session::get('phonepe');
       // $phonepeSession =  Cache::get('phonepe_user_'.auth()->user()->id);
            //  'amount' => $purchasePlan->price * 100,
            //     'profile_id' => $profile->id,
            //     'profile_uuid' => $profile_uuid,
            //     'purchased_profile_id' => $purchased_profile_id,
            //     'purchased_profile_uuid' => $purchased_profile_uuid,
            //     'plan_id' => $purchasePlan->id,
            //     'redirect' => route('phonepe.payment')

        $phonepeConfig = config('phonepe');

        $saltKey = $phonepeConfig['salt_key'];
        $saltIndex = $phonepeConfig['salt_index'];

   
        $finalXHeader = hash('sha256','/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'].$saltKey).'###'.$saltIndex;

       // $finalXHeader = $input['checksum'];
        // $response = Curl::to('https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'])
        //         ->withHeader('Content-Type:application/json')
        //         ->withHeader('accept:application/json')
        //         ->withHeader('X-VERIFY:'.$finalXHeader)
        //         ->withHeader('X-MERCHANT-ID:'.$input['transactionId'])
        //         ->get();

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $phonepeConfig['url'].'/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'],
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'X-VERIFY: '.$finalXHeader,
            'X-MERCHANT-ID: '.$input['merchantId']
          ),
        ));

        $response = curl_exec($curl);

        $response = json_decode($response, true);

        if(($response['success'] ?? false) == true) {
          $plan =  $phonepeSession['plan_id'] ?? null;
          $profile = Profile::find($phonepeSession['profile_id']);
          $purchasePlan = $profile->setPurchasedPlan($plan, $response);
  
          return redirect()->route('user.purchase_profile', [
            'profile' => $phonepeSession['profile_id'],
            'profile_uuid' => $phonepeSession['profile_uuid'],
            'purchased_profile_id' => $phonepeSession['purchased_profile_id'],
            'purchased_profile_uuid' => $phonepeSession['purchased_profile_uuid'],
          ]);
        } else {
          return view('pages.message', [
              'message' => 'Payment Failed',
              'sub_message' => json_encode($response)
            ]);
        }
    }
}
