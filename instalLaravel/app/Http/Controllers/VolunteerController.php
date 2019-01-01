<?php

namespace App\Http\Controllers;

use App\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('id', 'ASC')->paginate(5);
        return view('volunteer.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.create');
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
            'nama_vol' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'animal' => 'required',
            'animal_type' => 'required',
            'note' => 'required'
        ]);

        $volunteer = Volunteer::create($request->all());

        return redirect()->route('volunteer.index')->with('message', 'Volunteer berhasil dibuat!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteer.show', compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        return view('volunteer.edit', compact('volunteer'));
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
        $this->validate($request, [
            'nama_vol' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'animal' => 'required',
            'animal_type' => 'required',
            'note' => 'required'
        ]);

        $volunteer = Volunteer::findOrFail($id)->update($request->all());

        return redirect()->route('volunteer.index')->with('message', 'Volunteer berhasil diubah!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id)->delete();
        return redirect()->route('volunteer.index')->with('message', 'Volunteer berhasil dihapus!');
    
    }
}
