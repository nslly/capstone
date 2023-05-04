<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Booking;
use Illuminate\Http\Request;

class StatusOfBookMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $bookings = Booking::where('customer_email', auth()->user()->email)->first();
        
        // $bookings = Booking::all();
        // foreach($bookings as $booking) {
        //     $book_email = $booking['customer_email'];
        //     $book_status = $booking['status_of_book'];
        // }
        
        if($bookings !== null) {
            if($bookings['customer_email'] == auth()->user()->email) {
                if($bookings['status_of_book'] == 1) {
                    return $next($request);
                } else {
                    return redirect(route('pending_confirmation'));
                }
            } else {
                return redirect(route('already_book'));
            }
        } else {
            return redirect(route('booking.create'));
        }
    }
}
