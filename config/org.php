<?php

/*
|--------------------------------------------------------------------------
| Child Life Care Foundation — organisation details
|--------------------------------------------------------------------------
|
| Single source of truth for the details shown across the public site.
| Update them here and every page picks up the change.
|
*/

return [

    'name'     => 'Child Life Care Foundation',
    'short'    => 'CLCF',
    'tagline'  => 'Hands of Hope',

    'reg_no'   => '2025/12/IV/636',
    'pan'      => 'AADTC6707F',

    'email'    => 'Info@childlifecarefoundation.org',
    'phone'    => '7011389643',
    'phone_e164' => '917011389643',
    'website'  => 'www.childlifecarefoundation.org',

    'address'  => 'New Delhi, India',

    'donate_url' => 'https://razorpay.me/@childlifecarefoundation',
    'upi_id'     => 'MERCHANTAUMB100004901@AUBANK',

    'bank' => [
        'account_name' => 'Child Life Care Foundation',
        'account_no'   => '2502244266730773',
        'ifsc'         => 'AUBL0002442',
        'swift'        => 'AUBLINBBXXX',
        'type'         => 'Current Account',
        'branch'       => 'Yamuna Vihar, Delhi',
    ],

    // Cost of one meal under the food programme.
    'meal_cost' => 65,

    // Pre-set meal sponsorship amounts (live Razorpay links).
    'meal_options' => [
        ['amount' => 1300,  'meals' => 20,  'url' => 'https://razorpay.me/@childlifecarefoundation?amount=Hw2Ed8KyZMNNBVK1hMU9aw%3D%3D'],
        ['amount' => 3250,  'meals' => 50,  'url' => 'https://razorpay.me/@childlifecarefoundation?amount=e8B%2FnRywRhXpuJBetHYoKw%3D%3D'],
        ['amount' => 6500,  'meals' => 100, 'url' => 'https://razorpay.me/@childlifecarefoundation?amount=JJPKz8CZWxf%2FoBwbIHA9BA%3D%3D'],
        ['amount' => 13000, 'meals' => 200, 'url' => 'https://razorpay.me/@childlifecarefoundation?amount=NVKuok3TW0fqlP2z2DNCPw%3D%3D'],
        ['amount' => 32500, 'meals' => 500, 'url' => 'https://razorpay.me/@childlifecarefoundation?amount=pooN8KktHWIXvevz3yH%2BfA%3D%3D'],
    ],

];
