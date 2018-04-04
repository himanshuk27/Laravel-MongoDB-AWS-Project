<?php

namespace App\Mail\Cockpit;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailPromo extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {     

        $emailData = $this->data;

        return $this->from($emailData['from'], $emailData['fromName'])
                    ->view($emailData['layout'])->with($emailData)
                    ->subject($emailData['subject']);
    }
}
