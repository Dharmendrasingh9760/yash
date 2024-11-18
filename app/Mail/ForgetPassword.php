<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable
{
    public $resetLink;
    public $name;

    public function __construct($resetLink, $name)
    {
        $this->resetLink = $resetLink;
        $this->name = $name;
    }

    public function build()
    {
        return $this->view('emails.forgetPassword')
            ->with([
                'resetLink' => $this->resetLink,
                'name' => $this->name
            ])
            ->subject('Reset Password Notification');
    }
}
