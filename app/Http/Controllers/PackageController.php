<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::latest()->paginate(3);
        return view('package.index', [
            'packages' => $packages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::find($id);
        $services = Service::all();

        $total = 0;


        if(Session::has('services')) {
            foreach(Session::get('services') as $key => $value) {
                $overall_price = $value['price'];
                $total += $overall_price;
            }
        }
        $package_price = $package->price;

        $package_price += $total;

        return view('package.show', [
            'package'       => $package,
            'services'      => $services,
            'package_price' => $package_price
        ]);
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

    public function add_service($id) {

        $package = Package::find($id);
        $services = Service::latest()->paginate(4);

        return view('package.add_service', [
            'package'       => $package,
            'services'      => $services
        ]);
    }

    public function add_service_session(Request $req, $id) {

        $package = Package::find($id);
        $services = Service::latest()->paginate(4);

        $services_name = $req->input('services_name');
        $services_price = $req->input('services_price');



        
        if($req->session()->has('services')) {

            $exist_name = array_column(Session::get('services'), 'name');
            
            if(in_array($services_name, $exist_name )) {

                //modal need
                echo "<script>alert('This service is already added.')</script>";
            } else {
                Session::push('services', [
                    'name'  =>  $services_name,
                    'price' =>  $services_price
                ]);
                echo "<script>alert('This service addded.')</script>";
            }

        } else {
            $req->session()->put('services', [
                0 => [
                    'name'  =>  $services_name,
                    'price' =>  $services_price
                ]
            ]);
            echo "<script>alert('This service added.')</script>";

        } 
        
        // dd(Session::get('services'));
            // $req->session()->forget('services');
        
        return view('package.add_service', [
            'package'       => $package,
            'services'      => $services
        ]);

    }

    public function book_package(Request $req) {

        $bookings = Booking::where('customer_email', auth()->user()->email)->first();
        $package_name = $req->input('package_name');
        $package_price = $req->input('package_price');

        Session::put('package', [
            'package_name'  => $package_name,
            'package_price' => $package_price
        ]);

        if($bookings !== null) {
            return redirect(route('booking.edit', $bookings['id']));
        } else {
            return redirect(route('booking.create'));
        }
        }
}
