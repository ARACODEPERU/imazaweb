<?php

namespace Modules\CRM\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Envelope;

class ClientHelpEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $con = $this->data[0];
        $msg = $this->data[1];
        $nam = $this->data[2];
        return new Envelope(
            from: new Address($msg->email_from, $nam),
            subject: $con->title,
        );
    }

    public function build()
    {
        return $this->view('crm::mails.client-help-mail', [
            'data' => $this->data
        ]);
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