<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $abouts=About::all();
        // dd($abouts);
        $testimonials=Testimonial::all();
        return view('frontend.index',compact('banners','abouts','testimonials'));
    }

    public function detail()
    {
        return view('frontend.detail');
    }

}
