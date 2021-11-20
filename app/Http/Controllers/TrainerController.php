<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainer = Trainer::all();
        return view('trainer.index', compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainer = new Trainer();
        $trainer->tr_name = $request->input('tr_name');
        $trainer->tr_title = $request->input('tr_title');
        if($request->hasFile('tr_image'))
        {
            $file = $request->file('tr_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $file->move('uploads/trainers/', $filename);
            $trainer->tr_image = $filename;
        }
        $trainer->save();
        return redirect()->back()->with('status', 'Trainer Added Successfully');
        // $trainer->tr_image = $request->input('image');

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
        $trainer = Trainer::find($id);
        return view('trainer.edit', compact('trainer'));
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
        $trainer = Trainer::find($id);
        $trainer->tr_name = $request->input('tr_name');
        $trainer->tr_title = $request->input('tr_title');
        if ($request->hasFile('tr_image')) 
        {
            $destination = 'uploads/trainers/' . $trainer->tr_image;
            if (File::exists($destination)) 
            {
                File::delete($destination);
            }
            $file = $request->file('tr_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/trainers/', $filename);
            $trainer->tr_image = $filename;
        }
        $trainer->update();
        return redirect()->back()->with('status', 'Trainer Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = Trainer::find($id);
        $destination = 'uploads/trainers/' . $trainer->tr_image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $trainer->delete();
        return redirect()->back()->with('status', 'Trainer Deleted Successfully');
    }
}
