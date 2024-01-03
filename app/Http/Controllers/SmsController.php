<?php

namespace App\Http\Controllers;

use App\Services\App\SMSService;

class SmsController extends Controller
{
    protected $twilioService;

    public function __construct(SMSService $twilioService)
    {
        $this->twilioService = $twilioService;
    }

    public function sendSms()
    {
        $to = '+92 321 4631972'; // Replace with recipient's phone number
        $message = 'SMS from eclipse app';
        $this->twilioService->sendSms($to, $message);

        return response()->json(['message' => 'SMS sent successfully!']);
    }
}
