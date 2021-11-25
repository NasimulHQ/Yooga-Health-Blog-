<?php

namespace App\Http\Controllers;

use App\Models\YogaHealth;
use Illuminate\Http\Request;

class YogaHealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yogahealth = YogaHealth::all();
        return view('yogahealth.index', compact('yogahealth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('yogahealth.create');
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
                'y_name'    => 'required|min:3|max:191|string',
                'y_details' => 'required|min:3|max:191|string',
                'icon' => 'required|min:3|max:191|string',
            ]
        );
        $yogahealth = new YogaHealth();
        $yogahealth->y_name = $request->input('y_name');
        $yogahealth->y_details = $request->input('y_details');
        $yogahealth->icon = $request->icon;
        $yogahealth->save();
        return redirect()->to( url('yogahealths') )->with('status', 'Yoga save successfully done');
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
        $yogahealth = YogaHealth::find($id);
        return view('yogahealth.edit', compact('yogahealth'));
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
                'y_name'    => 'required|min:3|max:191|string',
                'y_details' => 'required|min:3|max:191|string',
                'icon' => 'required|min:3|max:191|string',
            ]
        );
        $yogahealth = YogaHealth::find($id);
        $yogahealth->y_name = $request->input('y_name');
        $yogahealth->y_details = $request->input('y_details');
        $yogahealth->icon = $request->icon;
        $yogahealth->update();
        return redirect()->to(url('yogahealths'))->with('status', 'Yoga updated successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yogahealth = YogaHealth::find($id);
        $yogahealth->delete();
        return redirect()->to(url('yogahealths'))->with('status', 'Yoga delete successfully done');
    }
}
