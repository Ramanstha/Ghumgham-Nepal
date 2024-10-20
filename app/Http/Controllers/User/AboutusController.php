<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Aboutus;

class AboutusController extends Controller
{
    public function Aboutus(){
        $banner=Banner::orderby('id','desc')->paginate();
        $aboutus=Aboutus::first();
        return view('frontend.aboutus',compact('banner','aboutus'));
    }
}
