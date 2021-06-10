<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function store(Request $request) {
    //     Mail::to('maxence@labs.com')->send(new ContactSender($request));
    //     return redirect()->back();
    // }

    // EDIT Contact

    public function edit(Contact $contact) {

        return view('admin.contacts.contactEdit', compact('contact'));
    }

    // UPDATE Contact

    public function update(Request $request, Contact $contact) {

        request()->validate([
            "description" => ["required"],
            "street" => ["required"],
            "postcode" => ["required"],
            "city" => ["required"],
            "phone" => ["required"],
            "email" => ["required", "email"],
        ]);

        $contact->description = $request->description;
        $contact->street = $request->street;
        $contact->postcode = $request->postcode;
        $contact->city = $request->city;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();

        return redirect()->route('adminContact')->with('success', 'Modifications enregistrées');
    }
}
