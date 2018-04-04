<?php

namespace App\Mail\Esummit18;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {     

        return $this->from('esummit@ecell.org.in', 'KIIT E-Summit\' 18')
                    ->view('Esummit18.email_layouts.welcome')
                    ->subject('Welcome Aboard!');
    }
}
