<?php

namespace App\Mail\Icamp18;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PasswordReset extends Mailable
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

        return $this->from('no-reply@ecell.org.in', 'Internship Camp \'18')
                    ->view('Icamp18.email_layouts.pass_reset')->with($this->data)
                    ->subject('Password Reset - Internship Camp \'18');
    }
}
