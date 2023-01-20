<?php

namespace App\Http\Controllers\Tenant\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class sendSms implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $id;
    protected $token;
    protected $twilioNumber;
    protected $twilio;
    private $number;
    private $message;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($number, $message)
    {
        $this->id = env("TWILIO_SID");
        $this->token = env("TWILIO_TOKEN");
        $this->twilioNumber = env("TWILIO_FROM");
        $this->twilio = new \Twilio\Rest\Client($this->id, $this->token);
        $this->number = $number;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
            $message = $this->twilio->messages->create($this->number, array(
                "from" => $this->twilioNumber,
                'body' => $this->message
            ));
        Log::info($message->sid);

        }catch(\Exception $e){
            Log::error($e->getMessage());
        }
    }
}
