<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountReceivable extends Controller
{
    public function index()
    {
        return view('pages.account-receivable');
    }
}
