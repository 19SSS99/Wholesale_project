<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all()->sortByDesc('id');

        return view('dashboard.contacts.index', compact('contacts'));
    }
    public function show($id)
    {


        $contact=Contact::orderBy('id','DESC')->find($id);
        if(!$contact)
            return route('dashboard.contacts.index')->with(['error'=>'contact not found']);
        return view('dashboard.contacts.show',compact('contact'));

    }
    public function destroy($id)
    {

        $contact=Contact::find($id);
        if(!$contact){
            return redirect()->route('dashboard.contacts.index')->with(['error' => 'contact not found']);
        }
        // magic method to delete path of image
        $contact->delete();


        return redirect()->back()->with(['success' => 'Delete success']);



    }
}
