<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhyChooseUS extends Controller
{
    public function index()
    {
        return view('pages.why-choose-us');
    }
}
