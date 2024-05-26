<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    function allCareer(){

        $careers = Career::get();
        return view('backend.career.all_career',compact('careers'));
    }//end method



    function addCareer(){
        return view('backend.career.add_career');
    }//end method   


    function StoreCareer(Request $request){


        $request->validate([
            'career_name' => 'required|string',
            'job_position' => 'required|string|max:255',
            'career_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max size of 2MB
        ], [
            // Custom error messages
            'job_name.required' => 'The title name is required.',
            'title.unique' => 'The title name must be unique.',
            'job_position.required' => 'The job_position name is required.',
            'career_image.required' => 'The  image is required.',
            'career_image.image' => 'The file must be an image.',
            'career_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'career_image.max' => 'The image may not be greater than 2MB.',
        ]);
        
        
        $career = new Career();
        $career->career_name = $request->input('career_name');

        $career->career_slug = strtolower(str_replace(' ', '-', $request->career_name));
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

    
}
