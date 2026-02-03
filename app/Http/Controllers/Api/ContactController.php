<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->fill($request->validated());
        $contact->save();
        return response()->json(['message' => 'saved Successfully'], 201);
    }
  
}
