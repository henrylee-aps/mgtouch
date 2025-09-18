<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Mail::raw(
            "Email: {$request->email}\n",
            function ($mail) use ($request) {
                $mail->to(config('mail.to'))
                    ->from($request->email)
                    ->subject("Subscription: {$request->email}");
            }
        );

        return redirect()->to(url()->previous() . '#newsletter')
                 ->with('success', 'Thank you for subscribing to our newsletter!');

    }
}
