<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'subject' => ['required'],
            'message' => ['required']
        ]);
        Mail::to(config('mail.from.address'))
            ->send(new ContactUs($validated['name'], $validated['email'], $validated['subject'],$validated['message']));
        if (Auth::check()) {
            return redirect()->route('dashboard')->with("status", "Your message has been sent");
        } else {
            return redirect()->route('welcome')->with("status", "Your message has been sent successfully");
        }
    }
}