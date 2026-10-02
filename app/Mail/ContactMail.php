<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $messageContent;

    public function __construct($userData)
    {
        $this->user = $userData['user'];
        $this->messageContent = $userData['message'];
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@savethedate.it', 'No-reply'),
            subject: 'Grazie per averci contattato',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.Contact-Mail',
            with: [
                'user' => $this->user,
                'messageContent' => $this->messageContent,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
