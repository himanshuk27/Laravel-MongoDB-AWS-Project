<?php

namespace App\Mail\Icamp18;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BugSubmit extends Mailable
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

        return $this->from('bug-report@ecell.org.in', 'Icamp18 Bug Report')
                    ->view('Esummit18.email_bug_report')->with($this->data)
                    ->subject('Icamp18 Dashboard Bug Report - Internship Camp \'18');
    }
}
