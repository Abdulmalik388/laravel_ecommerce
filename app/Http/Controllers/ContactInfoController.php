<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function contactinfo(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        // Store the data using Eloquent's create method
        ContactInfo::create($validatedData);

        // Optional: Redirect or return a success response
        return redirect()->route('pages.welcome')->with('success', 'Message Sent successfully!');

    }
}
