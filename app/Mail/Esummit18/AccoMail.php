<?php

namespace App\Mail\Esummit18;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $emailData)
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

        return $this->from('info@ecell.org.in', 'KIIT E-Summit\' 18')
                    ->view('Esummit18/AccoMail')->with($this->data)
                    ->subject('Accomodation - KIIT E-Summit\'18');
    }
}
