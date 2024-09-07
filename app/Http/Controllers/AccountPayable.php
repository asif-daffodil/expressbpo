<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountPayable extends Controller
{
    public function index()
    {
        return view('pages.account-payable');
    }
}
