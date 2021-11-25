<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\category;
use App\Models\Client;
use App\Models\GoodHealth;
use App\Models\Trainer;
use App\Models\Welcome;
use App\Models\YogaHealth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        $client = Client::select('cl_image', 'cl_details', 'cl_name', 'cl_title')
            ->orderBy('id', 'asc')
            ->get();
        $goodhealth = GoodHealth::select('gh_title', 'gh_details', 'gh_image')
            ->orderBy('id', 'asc')
            ->get();
        return view('front-end.homePage', compact('client', 'goodhealth'));
    }
    public function aboutUs()
    {
        // Component use yoga-welcome 
        // Component use yoga-trainer 
        return view('front-end.aboutUs');
    }
    public function services()
    {
        // component use service-health
        return view('front-end.services');
    }
    public function blogs()
    {
        // component use blog-article
        return view('front-end.blogs');
    }
    public function blogCategory($slug)
    {
        return view('front-end.blogs');
    }
    public function contactUs()
    {
        return view('front-end.contactUs');
    }
    public function blogDetails()
    {
        $categories = category::select('category_name', 'category_slug')
            ->orderBy('category_name', 'asc')
            ->get();

        return view('front-end.blogdetails', compact('categories'));
    }
}
