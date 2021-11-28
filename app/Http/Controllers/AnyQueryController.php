<?php

namespace App\Http\Controllers;

use App\Models\AnyQuery;
use Illuminate\Http\Request;

class AnyQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anyquery = AnyQuery::all();
        return view('anyquery.index', compact('anyquery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anyquery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
        $request,
        [
                'location' => 'required|min:3|max:191|string',
                'phone'    => 'required|min:3|max:191|string',
                'email'    => 'required|min:3|max:191|string',
                'q_icon'   => 'required|min:3|max:191|string'
        ]
    );
    $anyquery = new AnyQuery();
    $anyquery->q_icon = $request->input('q_icon');
    $anyquery->location = $request->input('location');
    $anyquery->phone = $request->input('phone');
    $anyquery->email = $request->input('email');
    $anyquery->save();
    return redirect()->to( url('anyquerys') )->with('status', 'Query save successfully done');
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
        $anyquery = AnyQuery::find($id);
        return view('anyquery.edit', compact('anyquery'));
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
                'location' => 'required|min:3|max:191|string',
                'phone'    => 'required|min:3|max:191|string',
                'email'    => 'required|min:3|max:191|string',
                'q_icon'   => 'required|min:3|max:191|string'
            ]
        );
        $anyquery = AnyQuery::find($id);
        $anyquery->q_icon = $request->input('q_icon');
        $anyquery->location = $request->input('location');
        $anyquery->phone = $request->input('phone');
        $anyquery->email = $request->input('email');
        $anyquery->update();
        return redirect()->to(url('anyquerys'))->with('status', 'Query updated successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AnyQuery::destroy($id);
        return redirect()->to( url('anyquerys'))->with('status', 'Query deleted successfully done');
    }
}
