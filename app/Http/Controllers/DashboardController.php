<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\LaqueEvent;
use App\Models\TouristGuide;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    
    public function index() {



        $packages = Package::all();
        $tour_guides = TouristGuide::all();
        $events = LaqueEvent::all();
        $galleries = Gallery::all();


        // $admin = Booking::where('customer_email', auth()->user()->email)->get();
        // dd($admin);



        return view('dashboard', [
            'packages'          => $packages,
            'tour_guides'       => $tour_guides,
            'events'            => $events,
            'galleries'         => $galleries
        ]);
    }
}
