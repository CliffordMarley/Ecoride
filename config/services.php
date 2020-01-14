<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('713d4f73-ad90d455'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'key' => env('pk_test_KXTpVWgi0rxzyIzYO4uE2cwW006Svpo9S7'),
        'secret' => env('sk_test_trH7l4jxmllIGBqdbKVHPEuo00xw3wtD4r'),
    ],
    
    'facebook' => [
        'client_id' => env('FB_CLIENT_ID'),
        'client_secret' => env('FB_CLIENT_SECRET'),
        'redirect' => env('FB_REDIRECT'),
    ],

    'google' => [
        'client_id' => env('721110916129'),
        'client_secret' => env('AIzaSyD4n4WHpG2GmZ1ibw0lYwsVXAYrvSfi-eM'),
        'redirect' => env('157.245.134.213/zippy_taxi/'),
    ]

];
