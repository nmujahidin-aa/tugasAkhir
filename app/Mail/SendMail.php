<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $userReplyTo;

    public string $message;

    public string $userName;

    public function __construct(string $userReplyTo, string $message, string $userName,string $subject)
    {
        $this->userReplyTo = $userReplyTo;
        $this->message = $message;
        $this->userName = $userName;
    }

    public function build(): SendMail
    {
        return $this->markdown('Users.Contact.dynamic')
            ->replyTo($this->userReplyTo)
            ->subject('Kritik dan Saran')
            ->with([
                'message' => $this->message,
                'userName' => $this->userName,
                'userReplyTo' => $this->userReplyTo,
                'subject' => $this->subject,
            ]);
    }
}