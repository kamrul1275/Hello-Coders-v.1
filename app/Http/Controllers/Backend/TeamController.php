<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    function allTeam(){

        $teams = Team::get();
        return view('backend.team.all_team',compact('teams'));
    }//end method

    function addTeam(){
        return view('backend.team.add_team');
    }//end method

    function StoreTeam(Request $request){
        
 
        $request->validate([
            'team_name' => 'required|string|max:255|unique:teams,team_name',
            'job_position' => 'required|string|max:255',
            'team_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max size of 2MB
        ], [
            // Custom error messages
            'team_name.required' => 'The team name is required.',
            'team_name.unique' => 'The team name must be unique.',
            'team_image.required' => 'The team image is required.',
            'team_image.image' => 'The file must be an image.',
            'team_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'team_image.max' => 'The image may not be greater than 2MB.',
        ]);
        // Create a new Brand instance
        $team = new Team();
    
        // Handle the image file upload
        if($request->hasFile('team_image'))
        {
            $file = $request->file('team_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/team/', $filename);
            $team->team_image = 'uploads/team/' . $filename;
        }
    
        // Set other brand properties
        $team->team_name = $request->team_name; 
        $team->job_position = $request->job_position;
        $team->team_slug = strtolower(str_replace(' ', '-', $request->team_name));
    
        // Save the brand to the database
        $team->save();
    
        // Prepare the notification
        $notification = array(
            'message' => 'Team Inserted Successfully',
            'alert-type' => 'success'
        );
    
        // Redirect with the notification
        return redirect()->route('all.team')->with($notification);
        }//end method 
    }
    

