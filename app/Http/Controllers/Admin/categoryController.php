<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category =category::orderBy('id', 'desc')->get();
       return view('admin.category.index', [
           'categories'=> $category
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required|min:3|max:191|string',
            'category_slug' => 'required|min:3|max:191|string',
        ]);
        $category = new category();
        $category->category_name = $request->category_name;
        $category->category_slug = $request->category_slug;
        $category->save();
        return redirect()->route('categories.index')->with('success', 'message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'category_name'=> 'required|min:3|max:191|string',
            'category_slug'=> 'required|min:3|max:191|string',
        ]);
        $category->category_name = $request->category_name;
        $category->category_slug = $request->category_slug;
        $category->update();
        return redirect()->route('categories.index')->with('success', 'message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::destroy($id);
        return back();
    }
}
