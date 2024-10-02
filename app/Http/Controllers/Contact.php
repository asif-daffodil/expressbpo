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

/* 
public function sendEmail()
{
    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    try {
        // Send email
        Mail::to("lecturer1@dipti.com.bd")->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    } catch (\Exception $e) {
        // Log error and return failure message
        \Log::error('Mail send failed: ' . $e->getMessage());
        return redirect()->back()->with('error', 'There was a problem sending your message. Please try again later.');
    }
}

public function sendEmail()
    {
        try {
            // Simple email sending using Gmail SMTP
             Mail::raw('Hello World', function ($message) {
                $message->to('recipient-email@example.com')  // Recipient email
                        ->subject('Test Email')
                        ->from('your-email@gmail.com', 'Your Name');  // Sender email
            });

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log error and return failure message
            \Log::error('Mail send failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was a problem sending your message. Please try again later.');
        }
    } */
    
    public function sendEmail(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Email details
        $to = "asifmdabir@gmail.com";  // Replace with the recipient's email address
        $subject = $data['subject'];
        $message = "
        <html>
        <head>
            <title>{$data['subject']}</title>
        </head>
        <body>
            <h1>Message from {$data['name']}</h1>
            <p>Email: {$data['email']}</p>
            <p>{$data['message']}</p>
        </body>
        </html>
        ";
        $headers = "From: {$data['email']}\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html;charset=UTF-8\r\n";

        // Send the email
        if(mail($to, $subject, $message, $headers)) {
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to send your message. Please try again.');
        }
    }

}
