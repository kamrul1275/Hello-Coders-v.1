<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function ContactPage(){
        return view('frontend.contact.contact_page');
    }//end method


    function ContactStore(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:contacts,email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'message' => 'required',
           
        ], [
            // Custom error messages
            'name.required' => 'name is required.',
            'email.required' => 'email is required.',
            'email.unique' => 'email must be unique.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone number format is invalid.',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'phone.max' => 'Phone number must not exceed 15 digits.',
            'message.required'=> 'message  is required.',
        
        ]);
        // Create a new Brand instance
        $contacts = new  Contact();
    
    
        // Set other brand properties
        $contacts->name = $request->name; 
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->message = $request->message;
    
        // Save the brand to the database
        $contacts->save();
        //dd($contacts);
    
        // Prepare the notification
        $notification = array(
            'message' => 'Message Inserted Successfully',
            'alert-type' => 'success'
        );
    
        // Redirect with the notification
        return redirect()->route('contact.page')->with($notification);
        }//end method 

    }

