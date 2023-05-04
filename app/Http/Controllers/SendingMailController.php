<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Mail\ConfirmReservation;
use Illuminate\Support\Facades\Mail;

class SendingMailController extends Controller
{
    public function store() {


        $bookings = Booking::all();


        foreach($bookings as $booking) {   
                if($booking['status_of_book'] == 1) {     
                    if($booking['email_sent'] == 0)  {
                        Mail::to($booking['customer_email'])->send(new ConfirmReservation($booking));
                    } else {
                        return "Email Notification are already sent.";
                    }         
                } else {
                    if($booking['email_sent'] == 0)  {
                        Mail::to($booking['customer_email'])->send(new ConfirmReservation($booking));
                    } else {
                        return "Email Notification are already sent.";
                    }    
    
                }
            
        }

    }
}
