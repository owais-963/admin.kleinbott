<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $contacts = Contact::paginate(15);

        return view('contact.index', compact('contacts'));

    }

    public function view($id){
        $contact = Contact::findOrFail($id);

        $contact->is_read=true;

        return view('contact.view', compact('$contact'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());
    }
    

    public function destroy($id){
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return back();
    }

}
