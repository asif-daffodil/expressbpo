<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebDevelopmentService extends Controller
{
    public function index()
    {
        return view('pages.web-development-service');
    }
}
