<?php

namespace App\Mail;

use App\Models\Informationrequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestInfoSubmitter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Informationrequest $newinterest)
    {
        $this->newinterest = $newinterest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('appointment@gmail.com')
        ->subject("Welcome")
        ->view('emails.requestinfo_submitter')
        ->with([
            'newinterest' => $this->newinterest]);
    }
}


