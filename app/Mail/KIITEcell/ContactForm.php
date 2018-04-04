<?php

namespace App\Mail\KIITEcell;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailData)
    {
        $this->data = $emailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {     
        $data = $this->data;

        return $this->from('no-reply@ecell.org.in')
                    ->view('KIITEcell.email_layouts.contactForm')->with($data)
                    ->subject('Ecell Contact Form');
    }
}
