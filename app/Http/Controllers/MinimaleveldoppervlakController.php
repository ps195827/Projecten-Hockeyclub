<?php

namespace App\Http\Controllers;

use App\Models\Minimaleveldoppervlak;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MinimaleveldoppervlakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minimaleveldoppervlak = Minimaleveldoppervlak::paginate(10);
        return view('minimaleveldoppervlak.index', compact('minimaleveldoppervlak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('minimaleveldoppervlak.create');
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

        $minimaleveldoppervlak = Minimaleveldoppervlak::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Minimale veldoppervlakte succesvol toegevoegd');
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
        $minimaleveldoppervlak = Minimaleveldoppervlak::findorfail($id);
        return view('minimaleveldoppervlak.edit', compact('minimaleveldoppervlak'));
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

        $minimaleveldoppervlak_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Minimaleveldoppervlak::whereId($id)->update($minimaleveldoppervlak_data);

        return redirect()->route('minimaleveldoppervlak.index')->with('success',' Minimale veldoppervlakte succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $minimaleveldoppervlak = Minimaleveldoppervlak::findorfail($id);
        $minimaleveldoppervlak->delete();

       return redirect()->back()->with('success',' Minimale veldoppervlakte succesvol verwijderd');
    }
}
