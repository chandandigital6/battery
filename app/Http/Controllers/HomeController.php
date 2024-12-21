<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $abouts=About::all();
        // dd($abouts);
        return view('Frontend.index',compact('banners','abouts'));
    }

    public function detail()
    {
        return view('Frontend.detail');
    }

}
