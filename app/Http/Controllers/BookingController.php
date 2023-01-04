<?php

namespace App\Http\Controllers;



use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $services = Service::all();

        return view('booking.index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_email'            => 'required',
            'customer_services_avail'   => 'required|array|min:1',
            'customer_avail'            => 'required|integer',
            'res_date'                  => 'required', 
            'contact_num'               => 'required|string|min:11|max:11',

        ]); 

        Booking::create([
            'customer_email'            =>  $request->input('customer_email'),
            'customer_services_avail'   =>  implode(',', $request->input('customer_services_avail')),
            'customer_avail'            =>  $request->input('customer_avail'),
            'res_date'                  =>  $request->input('res_date'),
            'contact_num'               =>  $request->input('contact_num'),
        ]);

        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
