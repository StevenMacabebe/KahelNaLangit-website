<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'contact_number' => 'nullable|string',
        ]);

        Inquiry::create([
            'user_id' => Auth::id(),
            'full_name' => Auth::user()->name,
            'contact_number' => $request->contact_number,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'pending',
        ]);

        return redirect()->route('contact')->with('success', 'Your message has been sent. Thank you!');
    }
}