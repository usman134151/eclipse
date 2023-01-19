<?php

namespace App\Http\Controllers\Tenant\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class createEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $data;
    public $mailview;
    public $attachments;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$data,$mailview,$attachments = [])
    {
        $this->subject = $subject;
        $this->data = $data;
        $this->mailview = $mailview;
        $this->attachments = $attachments;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        // set subject and from email
        return new Envelope(
            from: new Address(config('app.mail_from') , config('app.name')),
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: $this->mailview,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return $this->attachments;
    }
}
