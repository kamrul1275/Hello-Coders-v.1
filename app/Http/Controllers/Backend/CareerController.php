<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CareerJob;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    function allCareer(){

        $careers = CareerJob::get();
        return view('backend.career.all_career',compact('careers'));
    }//end method



    function addCareer(){
        return view('backend.career.add_career');
    }//end method   


    function StoreCareer(Request $request){


        $request->validate([
            'job_title' => 'required|string|unique:career_jobs,job_title',
            'job_position' => 'required|string|max:255',
            'career_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max size of 2MB
        ], [
            // Custom error messages
            'job_title.required' => 'The title name is required.',
            'job_title.unique' => 'The title name must be unique.',
            'job_position.required' => 'The job_position name is required.',
            'career_image.required' => 'The  image is required.',
            'career_image.image' => 'The file must be an image.',
            'career_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'career_image.max' => 'The image may not be greater than 2MB.',
        ]);
        
        
        $career = new CareerJob();
        $career->job_title = $request->input('job_title');

       // $career->career_slug = strtolower(str_replace(' ', '-', $request->job_title));
        $career->job_position = $request->input('job_position');

          // Handle the image file upload
          if($request->hasFile('career_image'))
          {
              $file = $request->file('career_image');
              $extension = $file->getClientOriginalExtension();
              $filename = time() . '.' . $extension;
              $file->move('uploads/career/', $filename);
              $career->career_image = 'uploads/career/' . $filename;
          }
      
//dd($career);
        $career->save();
 
        $notification = array(
            'message' => 'Career Inserted Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('all.career')->with($notification);
    
    

    }//end method



    function deleteCareer($id){
        $career = CareerJob::find($id);
        
        // Check if the team exists
        if ($career) {
            // Delete the team
            $career->delete();
    
            // Set the success notification
            $notification = array(
                'message' => 'Career deleted successfully',
                'alert-type' => 'success'
            );
        } else {
            // Set the failure notification if team not found
            $notification = array(
                'message' => 'Career not found',
                'alert-type' => 'error'
            );
        }
    
        // Redirect back with the notification
        return redirect()->back()->with($notification);
    }

    
}
