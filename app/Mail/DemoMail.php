<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $bookConfirmation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bookConfirmation)
    {
        $this->bookConfirmation = $bookConfirmation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Congratulations! Your booking has been confirmed!')->view('email.test');
    }
}
