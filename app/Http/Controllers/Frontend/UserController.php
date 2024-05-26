<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Services;

class UserController extends Controller
{
    function Indedx(){
            $services = Services::get();
        // $services = Services::get();
        return view('frontend.layout.dashboard',compact('services'));
    }
    //end method



    // function CareerPage(){
    //     $careers = Career::get();
    //     return view('frontend.career.carrer_page',compact('careers'));
    // }//end method



    function CareerDetails(){

        return view('frontend.career.carrer_details');
    }


    // function ContactPage(){
    //     return view('frontend.contact.contact_page');
    // }


    function AboutPage(){

        $teams = Team::get();
        return view('frontend.about.about_page',compact('teams'));

    }

    function ServicePage(){
    
        return view('frontend.service.service_page');
    }
        
}
