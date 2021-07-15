<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'noreply.info.testing@gmail.com';
        $subject =    $this->data['subject'];


        return $this->view('emails.test')
            ->from($address,'Website Portfolio')
            ->replyTo($this->data['email'],$this->data['name'])
            ->subject($subject)
            ->with(['data' => $this->data]);
    }
}
