<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->ar_name = $request->input('ar_name');
        $article->ar_details = $request->input('ar_details');
        if($request->hasFile('ar_image'))
        {
            $file = $request->file('ar_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $file->move('uploads/articles/', $filename);
            $article->ar_image = $filename ;
        }
        $article->save();
        return redirect()->back()->with('status', 'Article Save Successfully Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->ar_name = $request->input('ar_name');
        $article->ar_details = $request->input('ar_details');
        if ($request->hasFile('ar_image')) 
        {
            $destination = 'uploads/articles/'. $article->ar_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('ar_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/articles/', $filename);
            $article->ar_image = $filename;
        }
        $article->update();
        return redirect()->back()->with('status', 'Article updated Successfully Done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $destination = 'uploads/articles/' . $article->ar_image;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $article->delete();
        return redirect()->back()->with('status', 'Article delete successful');
    }
}
