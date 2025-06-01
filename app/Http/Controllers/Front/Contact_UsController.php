<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\General_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Rules\Captcha;
class Contact_UsController extends Controller
{



    public function index()
    {
        return view('buyer.contact');
    }


    public function store_contact(ContactRequest $request){

    $data =  $request->all();
    $contact = Contact::create($data);
    return redirect()->back()->with(['success'=> 'Send message Successful']);

    }
    public function about()
    {
        return view('buyer.about');
    }


}
