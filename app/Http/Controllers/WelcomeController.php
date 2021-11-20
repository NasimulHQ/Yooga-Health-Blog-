<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $welcome = Welcome::all();
        return view('welcome.index', compact('welcome'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $welcome = new Welcome();
        $welcome->wl_title = $request->input('wl_title');
        $welcome->wl_detais = $request->input('wl_detais');
    
        if ($request->hasfile('wl_image')) 
        {
            $file = $request->file('wl_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/welcomes/', $filename);
            $welcome->wl_image = $filename;
        }
        $welcome->save();
        return redirect()->back()->with('status', 'Welcome Added Successfully');
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
        $welcome = Welcome::find($id);
        return view('welcome.edit', compact('welcome'));
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
        $welcome = Welcome::find($id);
        $welcome->wl_title = $request->input('wl_title');
        $welcome->wl_detais = $request->input('wl_detais');

        if ($request->hasfile('wl_image')) 
        {
            $destination = 'uploads/welcomes/' . $welcome->wl_image;
            if (File::exists($destination)) 
            {
                File::delete($destination);
            }
            $file = $request->file('wl_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/welcomes/', $filename);
            $welcome->wl_image = $filename;
        }
        $welcome->update();
        return redirect()->back()->with('status', 'Welcome Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $welcome = Welcome::find($id);
        $destination = 'uploads/welcomes/' . $welcome->wl_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $welcome -> delete();
        return redirect()->back()->with('status', 'Welcome Deleted Successfully');
    }
}
