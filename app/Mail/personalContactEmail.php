<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class personalContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $email_data;
    public function __construct($data)
    {   
        $this->email_data = $data;
    }

    public function build()
    {
        return $this->from($this->email_data['email'],'SofinNextwork Supporter')->subject("Personal Contact")->replyTo($this->email_data['email'])
            ->view('web.mail.personal_contact',['email_data'=> $this->email_data]);
    }
}
