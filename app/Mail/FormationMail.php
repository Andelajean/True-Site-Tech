<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('Confirmation de votre candidature')
            ->view('Mail.formation');
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
