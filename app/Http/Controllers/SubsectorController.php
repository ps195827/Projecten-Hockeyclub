<?php

namespace App\Http\Controllers;

use App\Models\Subsector;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubsectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsector = Subsector::paginate(10);
        return view('subsector.index', compact('subsector'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subsector.create');
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

        $subsector = Subsector::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Subsector succesvol toegevoegd');
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
        $subsector = Subsector::findorfail($id);
        return view('subsector.edit', compact('subsector'));
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

        $subsector_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Subsector::whereId($id)->update($subsector_data);

        return redirect()->route('subsector.index')->with('success',' Subsector succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subsector = Subsector::findorfail($id);
        $subsector->delete();

        return redirect()->back()->with('success',' Subsector succesvol verwijderd');
    }
}
