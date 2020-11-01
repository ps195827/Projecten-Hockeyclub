<?php

namespace App\Http\Controllers;

use App\Models\Werkvorm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WerkvormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $werkvorm = Werkvorm::paginate(10);
        return view('werkvorm.index', compact('werkvorm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('werkvorm.create');
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

        $werkvorm = Werkvorm::create([ 
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success',' Werkvorm succesvol toegevoegd');
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
        $werkvorm = Werkvorm::findorfail($id);
        return view('werkvorm.edit', compact('werkvorm'));
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

        $werkvorm_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Werkvorm::whereId($id)->update($werkvorm_data);

        return redirect()->route('werkvorm.index')->with('success',' Werkvorm succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $werkvorm = Werkvorm::findorfail($id);
        $werkvorm->delete();

       return redirect()->back()->with('success',' Werkvorm succesvol verwijderd');
    }
}
