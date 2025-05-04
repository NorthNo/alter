<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $verification_code;

    public function __construct($verification_code)
    {
        $this->verification_code = $verification_code;
    }

    public function build()
    {
        return $this->view('emails.verification')
                    ->with([
                        'verification_code' => $this->verification_code,
                    ]);
    }
}
