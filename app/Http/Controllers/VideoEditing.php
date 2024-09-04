<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoEditing extends Controller
{
    public function index()
    {
        return view('pages.video-editing');
    }
}
