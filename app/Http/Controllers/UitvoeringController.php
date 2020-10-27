<?php

namespace App\Http\Controllers;

use App\Models\Uitvoering;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UitvoeringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uitvoering = Uitvoering::paginate(10);
        return view('uitvoering.index', compact('uitvoering'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uitvoering.create');
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

        $uitvoering = Uitvoering::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Uitvoering succesvol toegevoegd');
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
        $uitvoering = Uitvoering::findorfail($id);
        return view('uitvoering.edit', compact('uitvoering'));
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

        $uitvoering_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Uitvoering::whereId($id)->update($uitvoering_data);

        return redirect()->route('uitvoering.index')->with('success',' Uitvoering succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uitvoering = Uitvoering::findorfail($id);
        $uitvoering->delete();

       return redirect()->back()->with('success',' Uitvoering succesvol verwijderd');
    }
}
