<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Team;

class SpelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speler = User::select("*")
            ->where('role', 4)
            ->orderByDesc("name")
            ->simplePaginate();
        

        return view('speler.index', compact('speler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speler = User::all();
        $team = Team::all();

        return view('speler.create', compact('speler','team'));
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
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        if ($request->input('password')) {
            $password = bcrypt($request->password);
        }

        else {
            $password = bcrypt('1234');
        }

        $speler = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $password
        ]);

        $speler->team()->attach($request->team);

        return redirect()->back()->with('success','Er is een nieuwe speler toegevoegd');
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
        $speler = User::findorfail($id);
        $team = Team::all();

        return view('speler.edit', compact('speler', 'team'));
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
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        $speler = User::findorfail($id);

        if($request->input('password')) {
            $speler_data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ];
        }
        else {
            $speler_data = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        }

        $speler->team()->sync($request->team);
        User::whereId($id)->update($speler_data);

        return redirect()->route('speler.index')->with('success',' speler succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speler = User::findorfail($id);
        $speler->delete();

       return redirect()->back()->with('success',' Speler succesvol verwijderd');
    }
}
