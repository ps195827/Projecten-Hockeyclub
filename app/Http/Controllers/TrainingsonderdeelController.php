<?php

namespace App\Http\Controllers;

use App\Models\Trainingsonderdeel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrainingsonderdeelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainingsonderdeel = Trainingsonderdeel::paginate(10);
        return view('trainingsonderdeel.index', compact('trainingsonderdeel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainingsonderdeel.create');
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

        $trainingsonderdeel = Trainingsonderdeel::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Trainingsonderdeel succesvol toegevoegd');
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
        $trainingsonderdeel = Trainingsonderdeel::findorfail($id);
        return view('trainingsonderdeel.edit', compact('trainingsonderdeel'));
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

        $trainingsonderdeel_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Trainingsonderdeel::whereId($id)->update($trainingsonderdeel_data);

        return redirect()->route('trainingsonderdeel.index')->with('success',' Trainingsonderdeel succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainingsonderdeel = Trainingsonderdeel::findorfail($id);
        $trainingsonderdeel->delete();

       return redirect()->back()->with('success',' Trainingsonderdeel succesvol verwijderd');
    }
}
