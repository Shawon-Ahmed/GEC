<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function aboutUs() 
    {
        return view('frontend.page.aboutUs');
    }
}
