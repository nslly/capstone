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
        $book_lists = Booking::where('email_sent', 0);
        $bookings_list = [];


        foreach($bookings as $booking) {  
            $bookings_list = $book_lists;
            dd($bookings_list);

            // if($booking['status_of_book'] == 1) {    
            //     if($booking['email_sent'] == 0) {
            //         Mail::to($booking['customer_email'])->send(new ConfirmReservation($booking)); 
            //     }    
                
            // } else {
            //     return "The Email was not accepted yet.";
            // }
        }
    }
}
