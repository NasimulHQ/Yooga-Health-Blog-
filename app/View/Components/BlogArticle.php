<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class BlogArticle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $article = Article::select('ar_image', 'ar_name', 'ar_details')
        ->orderBy('id', 'asc')
        ->get();
        return view('components.blog-article', compact('article'));
    }
}
