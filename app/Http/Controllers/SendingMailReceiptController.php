<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Mail\BookingReceipt;
use App\Models\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendingMailReceiptController extends Controller
{
    public function store() {


        $bookings = Booking::all();
        $billings = Billing::where('email_sent', 0)->get();

        foreach($billings as $billing) {
            $billing_email = $billing['email'];
            foreach($bookings as $booking) { 
                if($booking['customer_email'] == $billing_email) {
                    Mail::to($booking['customer_email'])->send(new BookingReceipt($booking));     
                } 
            }
        }
    }
}
