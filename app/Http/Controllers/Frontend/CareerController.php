<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\CareerJob;

class CareerController extends Controller
{
    function CareerPage(){

        $careers = CareerJob::get();
        return view('frontend.career.carrer_page',compact('careers'));
    }//end method

function careerDetailPage($id){

    $careers =CareerJob::findOrFail($id);
    //return  $careers;
  return view('frontend.career.career_details',compact('careers'));
   
}

    // function 

    function careerCvStore(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'message' => 'required|string',
            'cv' => 'required', // Validating file to be a PDF and maximum size 2MB
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone number format is invalid.',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'phone.max' => 'Phone number must not exceed 15 digits.',
            'message.required' => 'Message is required.',
            'cv.required' => 'CV is required.',
            // 'cv.mimes' => 'CV must be a PDF file.',
           
        ]);
    
       /// Handle the file upload
        // if ($request->hasFile('cv')) {
        //     $cvPath = $request->file('cv')->store('cvs', 'public');
        // }
    
        $careers = new  Career();
    
    
        // Set other brand properties
        $careers->career_name = $request->name; 
        $careers->email = $request->email;
        $careers->phone = $request->phone;
        $careers->message = $request->message;
        $careers->cv = $request->cv;
    //dd($careers);
    //dd($request->);
        // Save the brand to the database
        $careers->save();
       // dd($careers);
        // Save the data to the database or perform other actions
        // For demonstration purposes, we just return a success message
        $notification = array(
            'message' => 'Application submitted successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }//end method

    }

