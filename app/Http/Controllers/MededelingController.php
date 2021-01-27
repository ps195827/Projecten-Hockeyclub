<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mededeling;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MededelingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mededeling = Mededeling::paginate(10);
        return view('mededeling.index', compact('mededeling'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mededeling.create');
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
            'titel' => 'required',
            'omschrijving' => 'required'
        ]);

        $mededeling = Mededeling::create([ 
            'titel' => $request->titel,
            'omschrijving' => $request->omschrijving,
            'auteur' => Auth::id()
        ]);

        return redirect()->back()->with('success',' Mededeling is succesvol verzonden naar de trainers en spelers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $mededeling = Mededeling::find($id);

        return view('mededeling.show')->with('mededeling', $mededeling);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mededeling = Mededeling::find($id);
        return view('mededeling.edit')->with('mededeling', $mededeling);
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
            'titel' => 'required',
            'omschrijving' => 'required'
        ]);

        $mededeling_data = [
            'titel' => $request->titel,
            'omschrijving' => $request->omschrijving,
            'auteur' => Auth::id()
        ];

        Mededeling::whereId($id)->update($mededeling_data);

        return redirect()->route('mededeling.index')->with('success',' Mededeling succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mededeling = Mededeling::findorfail($id);
        $mededeling->delete();

       return redirect()->back()->with('success',' Mededeling succesvol verwijderd');
    }
}
