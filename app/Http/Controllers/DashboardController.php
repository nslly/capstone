<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    
    public function index() {


        $packages = Package::all();

        return view('dashboard', [
            'packages' => $packages
        ]);
    }
}
