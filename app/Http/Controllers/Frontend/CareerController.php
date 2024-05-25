<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    function CareerPage(){
        return view('frontend.career.carrer_page');
    }
}
