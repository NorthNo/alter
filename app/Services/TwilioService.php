<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
    }

    public function sendSMS($to, $message)
    {
        try {
            $this->twilio->messages->create(
                $to, // Alıcı telefon numarası
                [
                    'from' => env('TWILIO_PHONE_NUMBER'), // Twilio'dan aldığınız numara
                    'body' => $message // Göndermek istediğiniz mesaj
                ]
            );
            return "Mesaj gönderildi!";
        } catch (\Exception $e) {
            return "Mesaj gönderilirken bir hata oluştu: " . $e->getMessage();
        }
    }
}
