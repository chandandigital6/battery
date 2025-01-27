<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\MissionVision;
use App\Models\Product;
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
        $missionViosions=MissionVision::all();
        $products=Product::where('category_name','battery')->get();
        $productScooter=Product::where('category_name','electric scooter')->get();
        return view('frontend.index',compact('banners','abouts','testimonials','missionViosions','products','productScooter'));
    }

    public function detail( Product $product)
    {
        // dd($product);
        return view('frontend.detail',compact('product'));
    }

    public function thankyou(){
        return view('frontend.thankyou');
    }

}
