<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show($id)
    {
        $contact = Contact::query()->where('id', $id)->get()->first();

        return view('Backend.Contact.contact_view', compact('contact'));
    }
    public function destroy($id)
    {
        $contact = Contact::query()->where('id', $id)->get()->first();

        $contact->delete();

        return back()->with('success', 'Deleted successfully');
    }
}
