<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
    }

    public function detail()
    {
        return view('Frontend.detail');
    }

}
