<?php

return [
    'trial_days' => 14,

    'plans' => [
    	'march-monthly' => 'Monthly - $299',
	'march-yearly'=>'Yearly - $3588'
    ],

    'cancelation_reasons' => [
        'Too expensive',
        'Lacks features',
        'Not what I expected',
    ],

    'stripe_key' => env('STRIPE_KEY'),
    'stripe_secret' => env('STRIPE_SECRET'),
];
