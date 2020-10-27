<?php

namespace App\Http\Controllers;

use App\Models\Spelfase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SpelfaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spelfase = Spelfase::paginate(10);
        return view('spelfase.index', compact('spelfase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spelfase.create');
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
            'name' => 'required|min:3'
        ]);

        $spelfase = Spelfase::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Spelfase succesvol toegevoegd');
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
        $spelfase = Spelfase::findorfail($id);
        return view('spelfase.edit', compact('spelfase'));
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
            'name' => 'required'
        ]);

        $spelfase_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Spelfase::whereId($id)->update($spelfase_data);

        return redirect()->route('spelfase.index')->with('success',' Spelfase succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spelfase = Spelfase::findorfail($id);
        $spelfase->delete();

       return redirect()->back()->with('success',' Spelfase succesvol verwijderd');
    }
}
