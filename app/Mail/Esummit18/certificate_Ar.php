<?php

namespace App\Mail\Esummit18;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class certificate_Ar extends Mailable
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

        return $this->from('no_reply@ecell.org.in','Esummit  \'18')
                    ->view('Esummit18.email_layouts.certificate_newAR')->with($this->data)
                    ->subject('AR VR certificate - Esummit\'18');
                    //->attach($this->data['path']);
                    
    }
}
