<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Doelgroep;
use App\Models\Oefening;
use App\Models\Team;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training = Training::paginate();
        return view('training.index', compact('training'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doelgroep = Doelgroep::all();
        $oefening = Oefening::all();
        $team = Team::all();

        return view('training.create', compact('team','oefening','doelgroep'));
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
            'titel' => 'required|min:3',
            'opmerking' => 'required',
            'trainingdatum' => 'required',
            'team_id' => 'required',
        ]);

        $training = Training::create([ 
            'titel' => $request->titel,
            'opmerking' => $request->opmerking,
            'trainingdatum' => $request->trainingdatum,
            'team_id' => $request->team_id,
            'auteur' => Auth::id(),
        ]);

        $training->oefening()->attach($request->oefening);

        return redirect()->back()->with('success',' Training succesvol toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::find($id);
        
        return view('training.show')->with('training', $training);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doelgroep = Doelgroep::all();
        $oefening = Oefening::all();
        $team = Team::all();
        $training = Training::findorfail($id);

        return view('training.edit', compact('training','team','oefening','doelgroep'));
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
            'titel' => 'required|min:3',
            'opmerking' => 'required',
            'trainingdatum' => 'required',
            'team_id' => 'required',
        ]);

        $training = Training::findorfail($id);

        $training_data = [ 
            'titel' => $request->titel,
            'opmerking' => $request->opmerking,
            'trainingdatum' => $request->trainingdatum,
            'team_id' => $request->team_id,
            'auteur' => Auth::id(),
        ];

        $training->oefening()->sync($request->oefening);
        Training::whereId($id)->update($training_data);

        return redirect()->route('training.index')->with('success',' training succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $training = Training::findorfail($id);
        $training->delete();

        return redirect()->back()->with('success', 'Training is verwijderd');
    }
}
