<?php

namespace App\Mail;

use App\Models\Careers;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class careerEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $email_data;
    public $position;
    public function __construct($data)
    {
        $this->email_data = $data;
        $this->position = Careers::find($data['position'])->name;
    }
    public function build()
    {
        return $this->from($this->email_data['careerEmail'],'SofinNextwork Supporter')->subject($this->email_data['name']." ứng tuyển cho vị trí ".$this->position)->replyTo($this->email_data['careerEmail'])
            ->view('web.mail.career_email',['email_data'=> $this->email_data],['position' => $this->position])
            ->attach($this->email_data['attachment']->getRealPath(),[
                'as' => $this->email_data['attachment']->getClientOriginalName()
            ])
            ;
    }
}
