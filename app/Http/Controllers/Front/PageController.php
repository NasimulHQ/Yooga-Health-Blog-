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
        $trainer = Trainer::select('tr_name', 'tr_title', 'tr_image')
            ->orderBy('id', 'asc')
            ->get();
        return view('front-end.aboutUs', compact('trainer'));
    }
    public function services()
    {
        $yogahealth = YogaHealth::select('y_name', 'y_details')
            ->orderBy('id', 'asc')
            ->get();
        return view('front-end.services', compact('yogahealth'));
    }
    public function blogs()
    {
        $article = Article::select('ar_image', 'ar_name', 'ar_details')
            ->orderBy('id', 'asc')
            ->get();
        return view('front-end.blogs', compact('article'));
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
