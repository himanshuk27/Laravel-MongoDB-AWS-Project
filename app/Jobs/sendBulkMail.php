<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\Esummit18\Welcome as Welcome;
use Mail;

class sendBulkMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailArray;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emailArray)
    {
        $this->emailArray = $emailArray;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emailArray = $this->emailArray;

        foreach ($emailArray as $email) {
            Mail::to('vekuhiyude@web2mailco.com')->send(new Welcome);
        }
    }
}
