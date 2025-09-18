<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'comments' => 'required|string|max:2000',
        ]);

        // Send email (simple example)
        Mail::raw(
            "Name: {$request->name}\n".
            "Email: {$request->email}\n".
            "Subject: {$request->subject}\n\n".
            "Message:\n{$request->comments}",
            function ($mail) use ($request) {
                $mail->to(config('mail.to'))
                    ->from($request->email, $request->name)
                    ->subject("Contact Form: {$request->subject}");
            }
        ); 

        /*
        Mail::raw($request->comments, function ($mail) use ($request) {
            $mail->to('henrylee103@gmail.com') 
                 ->from($request->email)
                 ->subject('New Contact Form Message');
        }); */

        // Redirect back with success message
        return back()->with('success', 'Thank you for contacting us. We’ll get back to you promptly!');
    }
}
