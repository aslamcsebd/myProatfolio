<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\AnyTitle;
use App\Models\ProfilePicture;
use App\Models\SocialSite;
use App\Models\Home;
use App\Models\About;
use App\Models\service;

class FrontendController extends Controller{
   
   public function index(){
      $data['profilePicture'] = ProfilePicture::where('status', 1)->first();
      $data['SocialSite'] = SocialSite::all();
      $data['Home'] = Home::where('status', 1)->get();
      $data['aboutMe'] = AnyTitle::where('title', 'aboutMe')->first();

      return view('frontend.index', $data);
   }
}
