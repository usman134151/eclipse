<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    protected $id;
    protected $token;
    protected $twilioNumber;
    protected $twilio;

     /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->id = env("TWILIO_SID");
    $this->token = env("TWILIO_TOKEN");
    $this->twilioNumber = env("TWILIO_FROM");
    $this->twilio = new \Twilio\Rest\Client($this->id, $this->token);
  }

  /**
  * Send message with Twilio
  */
  public function sendSMS($number, $message){
    try{
      // dd($number, $message,$this->twilioNumber);
      $messages = $this->twilio->messages->create($number, array(
        "from" => $this->twilioNumber,
        'body' => "$message"
      ));
      // dd($messages);
      if($messages->sid!=null){
        return 1;
      }else{
        return 0;
      }
    }catch(\Exception $e){
      return $e->getMessage();
    }
  }
}
