<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApprobedMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $user;
     public $nameworkenv;
     public $owner;
     
    public function __construct($user, $nameWork, $owner)
    {
        //
        $this->user = $user;
        $this->nameworkenv = $nameWork;
        $this->owner = $owner;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitud de unión al entorno '.$this->nameworkenv,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.solicitudaprobada',
            with: [
                'name' => $this->user,
                'workenv' => $this->nameworkenv,
                'owner' => $this->owner

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
