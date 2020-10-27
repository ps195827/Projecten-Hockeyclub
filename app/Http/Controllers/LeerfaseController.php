<?php

namespace App\Http\Controllers;

use App\Models\Leerfase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LeerfaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leerfase = Leerfase::paginate(10);
        return view('leerfase.index', compact('leerfase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leerfase.create');
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

        $leerfase = Leerfase::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Leerfase succesvol toegevoegd');
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
        $leerfase = Leerfase::findorfail($id);
        return view('leerfase.edit', compact('leerfase'));
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

        $category_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Leerfase::whereId($id)->update($category_data);

        return redirect()->route('leerfase.index')->with('success',' Leerfase succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leerfase = Leerfase::findorfail($id);
        $leerfase->delete();

       return redirect()->back()->with('success',' Leerfase succesvol verwijderd');
    }
}
