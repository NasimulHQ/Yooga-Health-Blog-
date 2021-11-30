<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\AnyQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function Contact()
    {
        $anyquery = AnyQuery::all();
        return view('front-end.contactUs', compact('anyquery'));
    }
    public function sendEmail(Request $request)
    {
        $details = 
        [
            'name' => $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
        ];
        Mail::to('nasimulh13@gmail.com')->send(new ContactMail($details));
        return back()->with('status', 'Your message has been submitted');
    }
}
