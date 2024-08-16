<?php

namespace App\Repositories\Mail;

interface MailInterface
{
    public function personalContact($data);

    public function brandContact($data);

    public function careerMail($data);
}