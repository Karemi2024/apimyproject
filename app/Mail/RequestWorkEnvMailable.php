<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestWorkEnvMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
     public $user;
     public $nameworkenv;
     public $member;

    public function __construct($nameworkenv, $user, $member)
    {
        //

        $this->user = $user;
        $this->nameworkenv = $nameworkenv;
        $this->member = $member;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitud de unión al entorno trabajo '.$this->nameworkenv,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.solicitudunionentorno',
            with: [
                'name' => $this->user,
                'workenv' => $this->nameworkenv, // Pasar el dato a la vista
                'member' => $this->member
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
