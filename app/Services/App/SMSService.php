<?php

namespace app\Services\App;

use Twilio\Rest\Client;

class SMSService
{
    protected $client;
    protected $from;

    public function __construct()
    {
        $account_sid = env('TWILIO_ACCOUNT_SID');
        $auth_token = env('TWILIO_AUTH_TOKEN');
        $this->from = env('TWILIO_PHONE_NUMBER');
        $this->client = new Client($account_sid, $auth_token);
    }

    public function sendSms($to, $message)
    {
        return $this->client->messages->create($to, [
            'from' => $this->from,
            'body' => $message
        ]);
    }
}
