<?php

namespace App\Http\Controllers\Tenant\Jobs;

use App\Http\Controllers\Tenant\Mails\createEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $to;
    public $subject;
    public $data;
    public $mailview;
    public $attachments;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to,$subject,$data,$mailview,$attachments = [])
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->data = $data;
        $this->mailview = $mailview;
        $this->attachments = $attachments;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new createEmail($this->subject, $this->data, $this->mailview, $this->attachments);
        Mail::to($this->to)->send($email);
    }
}
