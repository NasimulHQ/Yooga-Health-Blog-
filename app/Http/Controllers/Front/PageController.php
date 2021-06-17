<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function homePage(){
       return view('front-end.homePage');
   }
   public function aboutUs(){
       return view('front-end.aboutUs');
   }
   public function services(){
       return view('front-end.services');
   }
   public function blogs(){
       return view('front-end.blogs');
   }
   public function contactUs(){
       return view('front-end.contactUs');
   }
}
