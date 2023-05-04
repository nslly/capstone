<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Billing;
use App\Models\Booking;
use Illuminate\Http\Request;
use Filament\Notifications\Notification;

class BillingController extends Controller
{
    public function index() {

        $bookings = Booking::where('customer_email', auth()->user()->email)->get();

        foreach($bookings as $booking) {
            $book_email = $booking['customer_email'];
        }

        return view('payment.index', [
            'book_email' => $book_email
        ]);
    }

    public function store(Request $req) {

        if (!$req->has('payment_file')) {
            return redirect(route('payment'));
        }

        $billings = Billing::where('email', auth()->user()->email)->get();

        if($billings->isEmpty()) {
            $img =   time() . '-' . $req->email . '.' . $req->payment_file->extension();

            $req->validate([
                'email'             => 'required',
                'payment_file'      => 'required|mimes:jpg,png,jpeg|max:5048'
            ]);
    
            $req->payment_file->move(public_path('images/gcash'), $img);
    
            Billing::create([
                'email'             =>  $req->input('email'),
                'bill_img_path'     =>  $img
            ]);    


             // 
            // Sending a billing notification for the staff in backend
            //
            $user = auth()->user();
            $staff = '';
            $admins = User::all();
            foreach($admins as $admin) {
                $adm= $admin['email'];
                if($adm == 'staff@admin.com') {
                    $staff = $admin;
                }
            }
            Notification::make()
                ->title($user->email . ' upload their screenshot of payment.')
                ->success()
                ->icon('heroicon-o-currency-dollar') 
                ->sendToDatabase($staff);

            return redirect(route('payment.paid'));
        } 



        foreach($billings as $billing) {
            if($billings) {
                $billing_email = $billing['email'];
            }
        }

        if($billing_email == auth()->user()->email){
            return redirect(route('payment.already_paid'));
        } 

    }
}
