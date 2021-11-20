<?php

namespace App\Http\Controllers;

use App\Models\GoodHealth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GoodHealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goodhealth = GoodHealth::all();
        return view('goodhealth.index', compact('goodhealth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goodhealth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
                'gh_title' => 'required|min:3|max:191|string',
                'gh_details' => 'required|min:3|max:191|string',
                'gh_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $goodhealth = new GoodHealth();
        $goodhealth->gh_title = $request->input('gh_title');
        $goodhealth->gh_details = $request->input('gh_details');
        if($request->hasFile('gh_image'))
        {
            $file = $request->file('gh_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $file->move('uploads/goodhealths/', $filename);
            $goodhealth->gh_image = $filename;
        }
        $goodhealth->save();
        return redirect()->back()->with('status', 'Good Health successfully done');

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
        $goodhealth = GoodHealth::find($id);
       return view('goodhealth.edit', compact('goodhealth'));
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
        $this->validate(
            $request,
            [
                'gh_title' => 'required|min:3|max:191|string',
                'gh_details' => 'required|min:3|max:191|string',
                'gh_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $goodhealth = GoodHealth::find($id);
        $goodhealth->gh_title = $request->input('gh_title');
        $goodhealth->gh_details = $request->input('gh_details');
        if ($request->hasFile('gh_image')) 
        {
            $destination = 'uploads/goodhealths/' .$goodhealth->gh_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('gh_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/goodhealths/', $filename);
            $goodhealth->gh_image = $filename;
        }
        $goodhealth->update();
        return redirect()->back()->with('status', 'Good Health updated successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goodhealth = GoodHealth::find($id);
        $destination = 'uploads/goodhealths/' .$goodhealth->gh_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $goodhealth->delete();
        return redirect()->back()->with('status', 'Good Health delete successful');
    }
}
