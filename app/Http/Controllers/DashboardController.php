<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $contacts = Contact::latest()->paginate(10); // get latest contacts

        return view('dashboard', compact('contacts'));
    }
}
