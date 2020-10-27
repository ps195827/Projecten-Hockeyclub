<?php

namespace App\Http\Controllers;

use App\Models\Intensiteit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IntensiteitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intensiteit = Intensiteit::paginate(10);
        return view('intensiteit.index', compact('intensiteit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intensiteit.create');
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

        $intensiteit = Intensiteit::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Intensiteit succesvol toegevoegd');
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
        $intensiteit = Intensiteit::findorfail($id);
        return view('intensiteit.edit', compact('intensiteit'));
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

        $intensiteit_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Intensiteit::whereId($id)->update($intensiteit_data);

        return redirect()->route('intensiteit.index')->with('success',' Intensiteit succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intensiteit = Intensiteit::findorfail($id);
        $intensiteit->delete();

       return redirect()->back()->with('success',' Intensiteit succesvol verwijderd');
    }
}
