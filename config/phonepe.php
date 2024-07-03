<?php

return [
    'js_configuration' => [
        'merchantId' => env('PHONEPE_MERCHANT_ID', 'PGTESTPAYUAT86'),

        'amount' => 100,
        'redirectMode' => 'POST',
        'paymentInstrument' => [
            'type' => 'PAY_PAGE',
        ],

    ],
    'salt_key' => env('PHONEPE_SALT_KEY', '96434309-7796-489d-8924-ab56988a6076'),
    'salt_index' => env('PHONEPE_SALT_INDEX', 1),
    'url' => env('PHONEPE_URL', 'https://api-preprod.phonepe.com/apis/pg-sandbox'),

];
