<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingReceipt extends Mailable
{
    use Queueable, SerializesModels;

    protected $booking;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {

        $this->booking = $booking;

    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('laque.beach@gmail.com', 'Laque Beach Staff'),
            subject: 'User Receipt',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.receipt',
            with: [
                'id'                    => $this->booking->id,
                'email'                 => $this->booking->customer_email,
                'package'               => $this->booking->package,
                'tour_guide'            => $this->booking->tour_guide,
                'colleague'             => $this->booking->customer_avail,
                'added_services'        => $this->booking->added_services,
                'reservation_date'      => $this->booking->res_date,
                'amount'                => $this->booking->avail_price,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
