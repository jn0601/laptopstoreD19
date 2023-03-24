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
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    'facebook' => [
        'client_id' => '729873248747273',  //client face 
        'client_secret' => 'd2d9c2d8289a707d84a34b74c2072299',  //client secret key
        'redirect' => 'https://jn0106.000webhostapp.com/admin/callback' //callback trả về
    ],
    
    'google' => [
        'client_id' => '455743719569-fiickkes403tc8us8colhvrje2qj2mjc.apps.googleusercontent.com', //client google
        'client_secret' => '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', //client secret key
        'redirect' => 'https://jn0106.000webhostapp.com/customer/google/callback' //callback trả về
    ],



];