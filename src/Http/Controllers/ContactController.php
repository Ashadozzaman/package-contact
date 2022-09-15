<?php

namespace Ashadozzaman\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Ashadozzaman\Contact\Mail\ContactMailable;
use Ashadozzaman\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view("Contact::contact");
    }

    public function contact(Request $request){
        $data = $request->except('_token');
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($data);
        return redirect()->back();
    }
}
