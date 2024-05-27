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
            'describtion' => 'required|string|max:255',
            'services_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max size of 2MB
        ], [
            // Custom error messages
            'title.required' => 'The title name is required.',
            'title.unique' => 'The title name must be unique.',
            'describtion.required' => 'The job_position name is required.',
            'services_image.required' => 'The  image is required.',
            'services_image.image' => 'The file must be an image.',
            'services_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'services_image.max' => 'The image may not be greater than 2MB.',
        ]);
        
        $Services = new Services();
        $Services->title = $request->input('title');
        $Services->job_position = $request->input('describtion');
        $Services->service_slug = strtolower(str_replace(' ', '-', $request->title));
       



    // Handle the image file upload
    if($request->hasFile('services_image'))
    {
        $file = $request->file('services_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/services/', $filename);
        $Services->services_image = 'uploads/services/' . $filename;
    }

        $Services->save();
        // Handle file upload error
      // Prepare the notification
      $notification = array(
        'message' => 'Team Inserted Successfully',
        'alert-type' => 'success'
    );
        return redirect('/all/services')->with($notification);
    }


    function deleteServices($id){
          $services= Services::find($id);
          if ($services) {
            // Delete the team
            $services->delete();
    
            // Set the success notification
            $notification = array(
                'message' => 'Services deleted successfully',
                'alert-type' => 'success'
            );
        } else {
            // Set the failure notification if team not found
            $notification = array(
                'message' => 'Services not found',
                'alert-type' => 'error'
            );
        }
    
        // Redirect back with the notification
        return redirect()->back()->with($notification);
    }


}
