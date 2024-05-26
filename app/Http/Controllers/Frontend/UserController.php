<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class UserController extends Controller
{
    function Indedx(){
        return view('frontend.layout.dashboard');
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
        return view('frontend.about.about_page');

    }

    function ServicePage(){
        return view('frontend.service.service_page');
    }
        
}
