<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function contactAllBackend(){

        $contacts =Contact::all();
        return view('backend.contact.all_contact',compact('contacts'));
    }
}
