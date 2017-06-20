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
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => 'c375fd5f258236833118',
        'client_secret' => 'e4690bb59e7a3a27af065e6e7b07ad3153b1c570',
        'redirect' => 'http://localhost:8000/retorno/github',
    ],

    'facebook' => [
        'client_id' => '100191673929140',
        'client_secret' => '1dfe982ee8a9f039356c07cd2e876151',
        'redirect' => 'http://localhost:8000/retorno/facebook',
    ],

];
