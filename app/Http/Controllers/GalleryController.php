<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function index() {


        $galleries = Gallery::latest()->paginate(4);

        return view('gallery.index', [
            'galleries' => $galleries
        ]);
    }
}
