<?php

namespace App\Http\Controllers\Client;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index ()
    {
        return view('client.contact');
    }

    public function store(Request $request)
    {
        // $attributes = $request->validate([
        //     'first_name' => ['required'],
        //     'last_name' => ['required'],
        //     'email' => ['required', 'email'],
        //     'subject' => ['required'],
        //     'country' => ['required'],
        //     'body' => ['required']
        // ]);

        // Contact::create($attributes);

        session()->flash('success', 'Thank you for reaching out. We will contact you shortly.');
        return back();
    }
}
