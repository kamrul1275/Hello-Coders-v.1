<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    function allServices(){

        $services = Services::latest()->get();
        return view('backend.services.all_services',compact('services'));
    }//end method



    function addServices(){
           return view('backend.services.add_services');
    }//end method


    
    function storeServices(Request $request){

        $request->validate([
            'title' => 'required|string|max:255|unique:services,title',
            'job_position' => 'required|string|max:255',
            'services_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max size of 2MB
        ], [
            // Custom error messages
            'title.required' => 'The title name is required.',
            'title.unique' => 'The title name must be unique.',
            'job_position.required' => 'The job_position name is required.',
            'services_image.required' => 'The  image is required.',
            'services_image.image' => 'The file must be an image.',
            'services_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'services_image.max' => 'The image may not be greater than 2MB.',
        ]);
        
        $Services = new Services();
        $Services->title = $request->input('title');
        $Services->job_position = $request->input('job_position');
        $Services->service_slug = strtolower(str_replace(' ', '-', $request->title));
       


        if($request->hasfile('services_image'))
        {
            $file = $request->file('services_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/Services/', $filename);
            $Services->services_image = $filename;
        }
        //dd($Services);
        $Services->save();
        // Handle file upload error
      // Prepare the notification
      $notification = array(
        'message' => 'Team Inserted Successfully',
        'alert-type' => 'success'
    );
        return redirect('/all/services')->with($notification);
    }


}
