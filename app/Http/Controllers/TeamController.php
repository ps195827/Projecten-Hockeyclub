<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Team;
use App\Models\Doelgroep;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::paginate(20);

        $user = DB::table("users")
        ->join('team_user','team_user.user_id', 'users.id')
        ->join('team','team.id', 'team_user.team_id')
        ->get();

        return view('team.index', compact('team'), ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doelgroep = Doelgroep::all();
        return view('team.create', compact('doelgroep'));
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
            'name' => 'required',
            'doelgroep_id' => 'required'
        ]);

        $team = Team::create([
            'name' => $request->name,
            'doelgroep_id' => $request->doelgroep_id
        ]);
        
        return redirect()->route('team.index')->with('success','Team succesvol toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        $user = User::all();
        
        return view('team.show',compact('user'))->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findorfail($id);
        $doelgroep = Doelgroep::all();
        return view('team.edit', compact('team','doelgroep'));
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
            'name' => 'required',
            'doelgroep_id' => 'required'
        ]);

        $team = Team::findorfail($id);

        $team_data = ([
            'name' => $request->name,
            'doelgroep_id' => $request->doelgroep_id
        ]);

        $team->update($team_data);

        return redirect()->route('team.index')->with('success','Team succesvol upgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findorfail($id);
        $team->delete();

        return redirect()->back()->with('success', 'Team succesvol verwijderd');
    }
}
