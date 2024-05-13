<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewContactList() {
        return view('contact-list', ['contacts' => Contact::orderBy('name')->get()]);
    }
    
    public function viewAddContact() {
        return view('add-contact');
    }
    
    public function viewSingleContact(Contact $contact) {
        return view('single-contact', ['contact' => $contact]);
    }

    public function addContact(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'phone_number' => ['required', 'phone:RO,INTERNATIONAL']
        ]);
        $newContact = Contact::create($incomingFields);
        
        return redirect("/single-contact/{$newContact->id}");
    }
}
