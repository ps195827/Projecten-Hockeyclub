<?php

namespace App\Http\Controllers;

use App\Models\Doelgroep;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DoelgroepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doelgroep = Doelgroep::paginate(10);
        return view('doelgroep.index', compact('doelgroep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doelgroep.create');
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
            'name' => 'required'
        ]);

        $doelgroep = Doelgroep::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Doelgroep succesvol toegevoegd');
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
        $doelgroep = Doelgroep::findorfail($id);
        return view('doelgroep.edit', compact('doelgroep'));
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

        $doelgroep_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Doelgroep::whereId($id)->update($doelgroep_data);

        return redirect()->route('doelgroep.index')->with('success',' Doelgroep succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doelgroep = Doelgroep::findorfail($id);
        $doelgroep->delete();

        return redirect()->back()->with('success',' Doelgroep succesvol verwijderd');
    }
}
