<?php

namespace App\Mail\Esummit18;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailPaymentBanner extends Mailable
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

        return $this->from('esummit@ecell.org.in')
                    ->view('Esummit18/emailPaymentBanner')->with($this->data)
                    ->subject('Complete Payment - KIIT E-Summit\'18');
    }
}
