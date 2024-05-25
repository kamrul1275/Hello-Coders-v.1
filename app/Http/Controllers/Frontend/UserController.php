<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function Indedx(){
        return view('frontend.layout.dashboard');
    }
    //end method



    function CareerPage(){
        return view('frontend.career.carrer_page');
    }//end method



    function CareerDetails(){

        return view('frontend.career.carrer_details');
    }


    function ContactPage(){
        return view('frontend.contact.contact_page');
    }


    function AboutPage(){
        return view('frontend.about.about_page');

    }
        
}
