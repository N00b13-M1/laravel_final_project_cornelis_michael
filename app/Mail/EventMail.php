<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Event;

class EventMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $event;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('events@alerto.com')
        ->subject("New Event")
        ->view('emails.event_mailer')
        ->with(['eventName' => $this->event->event_name]);
    }
}
