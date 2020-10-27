<?php

namespace App\Http\Controllers;

use App\Models\Moeilijkheidsgraad;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MoeilijkheidsgraadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moeilijkheidsgraad = Moeilijkheidsgraad::paginate(10);
        return view('moeilijkheidsgraad.index', compact('moeilijkheidsgraad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moeilijkheidsgraad.create');
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

        $moeilijkheidsgraad = Moeilijkheidsgraad::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Moeilijkheidsgraad succesvol toegevoegd');
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
        $moeilijkheidsgraad = Moeilijkheidsgraad::findorfail($id);
        return view('moeilijkheidsgraad.edit', compact('moeilijkheidsgraad'));
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

        $moeilijkheidsgraad_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Moeilijkheidsgraad::whereId($id)->update($moeilijkheidsgraad_data);

        return redirect()->route('moeilijkheidsgraad.index')->with('success',' Moeilijkheidsgraad succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $moeilijkheidsgraad = Moeilijkheidsgraad::findorfail($id);
        $moeilijkheidsgraad->delete();

       return redirect()->back()->with('success',' Moeilijkheidsgraad succesvol verwijderd');
    }
}
