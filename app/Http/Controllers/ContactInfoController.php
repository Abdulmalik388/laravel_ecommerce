<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactInfoController extends Controller
{
    public function contactinfo(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to DB
        ContactInfo::create($validatedData);

        // Send the email
        Mail::to('abdulmaliklawal388@gmail.com')->send(new ContactMail([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ]));

        return redirect()->route('pages.welcome')->with('success', 'Message sent successfully!');
    }
}
