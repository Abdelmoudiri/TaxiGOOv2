<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

// class LoginNotificationMail extends Mailable
// {
//     use Queueable, SerializesModels;


//     public $userName;
//     public $loginTime;
//     public function __construct(string $userName)
//     {
//         $this->userName = $userName;
//         $this->loginTime = now()->format('Y-m-d H:i:s');
//     }

//     public function envelope(): Envelope
//     {
//         return new Envelope(
//             subject: 'Login Notification Mail',
//         );
//     }

//     public function content(): Content
//     {
//         return new Content(
//             view: 'emails.login-notification',
//         );
//     }

//     public function attachments(): array
//     {
//         return [];
//     }
// }

class LoginNotificationMail extends Mailable
{
    public $fullName;
    public $loginTime;

    public function __construct($firstname, $lastname, $loginTime)
    {
        $this->fullName = $firstname . ' ' . $lastname;
        $this->loginTime = $loginTime;
    }

    public function build()
    {
        return $this->view('emails.login-notification')
            ->subject('Login Notification')
            ->with([
                'fullName' => $this->fullName,
                'loginTime' => $this->loginTime,
            ]);
    }
}