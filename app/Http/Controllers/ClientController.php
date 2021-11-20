<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\Cloud;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client(); 
        $client->cl_name = $request->input('cl_name');
        $client->cl_title = $request->input('cl_title');
        $client->cl_details = $request->input('cl_details');
        if($request->hasFile('cl_image'))
        {
            $file = $request->file('cl_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $file->move('uploads/clients/', $filename);
            $client->cl_image = $filename;
        }
        $client->save();
        return redirect()->back()->with('status', 'Client Save Successfully');
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
        $client = Client::find($id);
        return view('client.edit', compact('client'));
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
        $client = Client::find($id);
        $client->cl_name = $request->input('cl_name');
        $client->cl_title = $request->input('cl_title');
        $client->cl_details = $request->input('cl_details');
        if ($request->hasFile('cl_image')) 
        {
            $destination = 'uploads/clients/'.$client->cl_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('cl_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/clients/', $filename);
            $client->cl_image = $filename;
        }
        $client->update();
        return redirect()->back()->with('status', 'Client update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $destination = 'uploads/clients/'.$client->cl_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $client->delete();
        return redirect()->back()->with('status', 'Client delete Successfully');
    }
}
