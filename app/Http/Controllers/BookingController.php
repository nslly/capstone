<?php

namespace App\Http\Controllers;



use App\Models\User;
use App\Models\Booking;
use App\Models\Package;


use App\Models\TouristGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action; 
use Filament\Notifications\Events\DatabaseNotificationsSent;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('customer_email', auth()->user()->email)->first();



        if($bookings !== null) {
            $book = $bookings;
        } else {
            $book = null;
        }


        return view('booking.index', [
            'book_reserved'      => $book
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::all();
        $tour_guides = TouristGuide::all();

        return view('booking.create', [
            'packages'      => $packages,
            'tour_guides'   => $tour_guides
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $packages = Package::all();
        $bookings = Booking::where('customer_email', $request->input('customer_email'))->get();



        $request->validate([
            'customer_email'            => 'required',
            'customer_avail'            => 'required|integer',
            'res_date'                  => 'required', 
            'contact_num'               => 'required|string|min:11|max:11',
            'tour_guide'                => 'required',
            'package'                   => 'required',
            'avail_price'               => 'required|integer',
            'added_services'            => 'required'

        ]); 


        if($request->input('added_services') == 'N/A') {
            $added_service = $request->input('added_services');
        } else {
            $added_service = implode(',', $request->input('added_services'));
        }


        $reserved = Booking::all();
        foreach($reserved as $reserve) {
            $book_email = $reserve['customer_email'];
            $book_status = $reserve['status_of_book'];
        }

        
        if($bookings->isEmpty()) {
            Booking::create([
                'customer_email'            =>  $request->input('customer_email'),
                'customer_avail'            =>  $request->input('customer_avail'),
                'res_date'                  =>  $request->input('res_date'),
                'contact_num'               =>  $request->input('contact_num'),
                'tour_guide'                =>  $request->input('tour_guide'),
                'package'                   =>  $request->input('package'),
                'avail_price'               =>  $request->input('avail_price'),
                'added_services'            =>  $added_service,
            ]);

            // 
            // Sending a booking notification for the staff in backend
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
                ->title($user->email . ' request a reservation.')
                ->success()
                ->icon('heroicon-o-calendar') 
                ->sendToDatabase($staff);

            Session::forget(['services', 'package']);
            return redirect(route('pending_confirmation'));
        } else {
            if($book_status == 1) {
                Session::forget(['services', 'package']);
                return redirect(route('payment'));
            } else {
                Session::forget(['services', 'package']);
                return redirect(route('already_book'));
            }
        }

        return view('booking.create', [
            'packages'      => $packages,
        ]);
    }

    /**                                                                         
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = Booking::where('customer_email', auth()->user()->email)->get();
        return view('booking.show', [
            'bookings'   => $bookings
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $tour_guides = TouristGuide::all();
        return view('booking.edit', [
            'booking'       => $booking,
            'tour_guides'   => $tour_guides
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if($request->input('added_services') == 'N/A') {
            $added_service = $request->input('added_services');
        } else {
            $added_service = implode(',', $request->input('added_services'));
        }


        $request->validate([
            'customer_email'            => 'required',
            'customer_avail'            => 'required|integer',
            'res_date'                  => 'required', 
            'contact_num'               => 'required|string|min:11|max:11',
            'tour_guide'                => 'required',
            'package'                   => 'required',
            'avail_price'               => 'required|integer',
            'added_services'            => 'required'

        ]); 


        Booking::where('id', $id)
            ->update([
                'customer_email'            =>  $request->input('customer_email'),
                'customer_avail'            =>  $request->input('customer_avail'),
                'res_date'                  =>  $request->input('res_date'),
                'contact_num'               =>  $request->input('contact_num'),
                'tour_guide'                =>  $request->input('tour_guide'),
                'package'                   =>  $request->input('package'),
                'avail_price'               =>  $request->input('avail_price'),
                'added_services'            =>  $added_service,
            ]);


            // 
            // Updating a booking notification for the staff in backend
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
                ->title($user->email . ' update their reservation.')
                ->warning()
                ->sendToDatabase($staff);


            Session::forget(['services', 'package']);

        return redirect(route('booking.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $services = Session::get('services');
        $found = null;
        foreach ($services as $key => $value) {
            if($value['name'] == $req->input('services_name')) {
                $found = $key;
                $services = Session::pull('services');

                if($found) {
                    unset($services[$found]);
                } else if($found == 0) {
                    unset($services[$found]);
                }
            }
        }

        Session::put('services', $services);



        return redirect()->back();
    }


    public function delete_services($id) {
        return redirect(route('dashboard'));
    }

    
    
}
