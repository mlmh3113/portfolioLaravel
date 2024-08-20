<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;


    public function __construct($name, $email, $message)
    {
       $this->name = $name;
       $this->email = $email;
       $this->message = $message;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Portafolio Mail',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'emails.ContactMailView',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
