<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $contact = new Contact;
        // dd($request->validated());
        // \Log::info('CONTACT', $request->validated());

        $contact->fill($request->validated());
        $contact->save();
        Mail::to('yasshrestha1@gmail.com')->send(new \App\Mail\ContactMessageMail($contact));
        return response()->json(['message' => 'Your Message is Sent Successfully'], 201);
    }
}
