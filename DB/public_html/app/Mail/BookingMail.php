<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Book;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;
    public $booking;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Book $booking)
    {
        $this->booking = $booking;
        $this->subject = 'BOOKING#'.$booking->id.'- DISCOVER INDOCHINA™ - My Way Travel - '.$booking->date_send;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.booking')
        ->from(get_option('site_email'))
        ->to($this->booking->email)
        ->cc(get_option('site_email'));
    }
}
