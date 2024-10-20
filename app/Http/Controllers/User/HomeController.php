<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\Banner;
use App\Models\Aboutus;
use App\Models\Destination;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function Home(){
        $sitesetting=Sitesetting::first();
        $aboutus=Aboutus::first();
        $banner=Banner::orderby('id','desc')->paginate();
        $destination=Destination::orderby('id','desc')->get();
        $testimonial=Testimonial::orderby('id','desc')->get();
        return view('frontend.index',compact('sitesetting','banner','aboutus','destination','testimonial'));
    }
}
 