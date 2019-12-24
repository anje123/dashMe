<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DonateMail extends Mailable
{
    use Queueable, SerializesModels;
    public $donator;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($donator)
    {
        $this->donator = $donator;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.donate');
    }
}
