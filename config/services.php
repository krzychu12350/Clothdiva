<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
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
    'instagram' => [
        'access-token' => 'IGQVJYUU1hTDJ2OHAxbWtzR2pCS0Q3VVVsbVYwc2hnX2RBeUxKaDdZAN1Fwc2FWLUZAYM2o5eXl5d2tNVHhXQ1RlN2dkeGMxVlJVYjNhTjZAWMUMwRW5FNGl2bFhma2dlSG82Ulo1OFR1elA4N2VUVTdlNwZDZD',
        //replace xxx with your actual access token
    ],

];
