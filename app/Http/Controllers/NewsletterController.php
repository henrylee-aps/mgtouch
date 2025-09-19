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

        $toAddress = config('mail.to');

        Mail::raw(
            "Email: {$request->email}\n",
            function ($mail) use ($request, $toAddress) {
                // $mail->to(config('mail.to'))
                    $mail->to($toAddress)
                    ->from($request->email)
                    ->subject("Subscription: {$request->email}");
            }
        );

        return redirect()->to(url()->previous() . '#newsletter')
                 ->with('success', 'Thank you for subscription our newsletter! A copy has been sent to ' . $toAddress);

    }
}
