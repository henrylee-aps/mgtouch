<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

        // Recaptcha Validation
        // --------------------
        // Get Recaptcha token from the input form
        $recaptchaToken = $request->input('recaptcha_token');
        if (!$recaptchaToken) {
            return back()->withInput()->withErrors(['recaptcha' => 'The reCAPTCHA token is missing.']);
        }

        // Call Google's reCAPTCHA API
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('captcha.secret'), 
            'response' => $recaptchaToken,
        ]);
        $result = $response->json();
    
        // Check if the reCAPTCHA return with passing score
        if ($result['success'] && $result['score'] >= 0.5) {
            // Continue
        } else {
            $ipAddress = $request->ip();
            Log::warning('Faield reCaptcha attempt: form=register, IP = ' . $ipAddress . ', score = '. $result['score']);
            return back()->withInput()->withErrors(['recaptcha' => 'reCAPTCHA failed. Please try again.']);
        }

        // Send email (simple example)
        $toAddress = config('mail.to');

        Mail::raw(
            "Name: {$request->name}\n".
            "Email: {$request->email}\n".
            "Subject: {$request->subject}\n\n".
            "Message:\n{$request->comments}",
            function ($mail) use ($request, $toAddress) {
                $mail->to($toAddress)
                    ->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($request->email)
                    ->subject("New Subscription: {$request->email}");
            }
        );

        // Redirect back with success message
        return back()->with('success', 'Thank you for contacting us. We’ll get back to you promptly!');
    }
}
