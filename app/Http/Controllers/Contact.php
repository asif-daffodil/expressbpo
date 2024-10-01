<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendEmail()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send email
        Mail::to("aisfmdabir@gmail.com")->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
