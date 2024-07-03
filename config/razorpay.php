<?php

return [
    'js_configuration' => [
        'key' => env('RAZORPAY_KEY'), // Enter the Key ID generated from the Dashboard
        //"amount" => "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        'currency' => 'INR',
        'name' => env('APP_NAME'), //your business name
        //"description" => "Test Transaction",
        // "image" => asset('img/logo-e-connet.png'),
        //"order_id" => "order_9A33XWu170gUtm1",
        //This is a sample Order ID. Pass the `id` obtained in the response of Step 1

        // "handler": function (response){
        //     alert(response.razorpay_payment_id);
        //     alert(response.razorpay_order_id);
        //     alert(response.razorpay_signature);
        // },

        // "prefill" => [ //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
        //     "name" => "Gaurav Kumar", //your customer's name
        //     "email" => "gaurav.kumar@example.com",
        //     "contact" => "9000090000"  //Provide the customer's phone number for better conversion rates
        // ],
        'notes' => [
            // "address" =>  __getSiteConfigration('address_1')
        ],
        'theme' => [
            'color' => '#800080',
        ],

    ],

];
