<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactFormMailJob;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show($id)
    {
        $contact = Contact::query()->where('id', $id)->get()->first();

        return view('Backend.Contact.contact_view', compact('contact'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:200'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        try {
            // Save to DB
            $contact = Contact::create($validated);

            // Dispatch job to queue
            SendContactFormMailJob::dispatch($contact);

            return redirect()->back()->with('toast_success', 'Your message has been received! We\'ll get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('toast_error', 'Something went wrong. Please try again.');
        }
    }
    public function destroy($id)
    {
        $contact = Contact::query()->where('id', $id)->get()->first();

        $contact->delete();

        return back()->with('success', 'Deleted successfully');
    }
}
