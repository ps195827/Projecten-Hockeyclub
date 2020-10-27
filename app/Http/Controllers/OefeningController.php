<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Oefening;
use App\Models\Doelgroep;
use App\Models\Domein;
use App\Models\Leerfase;
use App\Models\Sector;
use App\Models\Spelfase;
use App\Models\Subsector;
use App\Models\Trainingsonderdeel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oefening = Oefening::paginate(10);
        return view('oefening.index', compact('oefening'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leerfase = Leerfase::all();
        $sector = Sector::all();
        $subsector = Subsector::all();
        $domein = Domein::all();
        $doelgroep = Doelgroep::all();
        $spelfase = Spelfase::all();
        $trainingsonderdeel = Trainingsonderdeel::all();
        $doelgroep = Doelgroep::all();
        return view('oefening.create', compact('domein','sector','subsector','leerfase','spelfase','trainingsonderdeel','doelgroep'));
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
            'titel' => 'required',
            'domein_id' => 'required',
            'sector_id' => 'required',
            'subsector_id' => 'required',
            'leerfase_id' => 'required',
            'moeilijkheidsgraad' => 'required',
            'beschrijving' => 'required',
            'spelfase_id' => 'required',
            'trainingsonderdeel_id' => 'required',
            'minimalegroepsgrootte' => 'required',
            'maximalegroepsgrootte' => 'required',
            'duur' => 'required',
            'organisatie' => 'required',
            'keeper' => 'required',
            'hesjes' => 'required',
            'pilonnen' => 'required',
            'dopjes' => 'required',
            'goaltjes' => 'required',
            'goals' => 'required',
            'hulpmiddelen' => 'required',
            'aandachtspunten' => 'required',
            'fouten' => 'required',
            'verzwaring' => 'required',
            'doelgroep_id' => 'required',
            'filmpje' => 'required'
        ]);

        $afbeelding = $request->file;
        $new_afbeelding = time().$afbeelding->getClientOriginalName();

        $oefening = Oefening::create([
            'titel' => $request->titel,
            'domein_id' => $request->domein_id,
            'sector_id' => $request->sector_id,
            'subsector_id' => $request->subsector_id,
            'leerfase_id' => $request->leerfase_id,
            'moeilijkheidsgraad' => $request->moeilijkheidsgraad,
            'beschrijving' => $request->beschrijving,
            'spelfase_id' => $request->spelfase_id,
            'trainingsonderdeel_id' => $request->trainingsonderdeel_id,
            'minimalegroepsgrootte' => $request->minimalegroepsgrootte,
            'maximalegroepsgrootte' => $request->maximalegroepsgrootte,
            'duur' => $request->duur,
            'organisatie' => $request->organisatie,
            'keeper' => $request->keeper,
            'hesjes' => $request->hesjes,
            'pilonnen' => $request->pilonnen,
            'dopjes' => $request->dopjes,
            'goaltjes' => $request->goaltjes,
            'goals' => $request->goals,
            'hulpmiddelen' => $request->hulpmiddelen,
            'aandachtspunten' => $request->aandachtspunten,
            'fouten' => $request->fouten,
            'verzwaring' => $request->verzwaring,
            'doelgroep_id' => $request->doelgroep_id,
            'filmpje' => $request->filmpje,
            'afbeelding' => 'public/uploads/oefening/'.$new_afbeelding,
            'auteur' => Auth::id(),
            'slug' => Str::slug($request->titel)
        ]);

        $afbeelding->move('public/uploads/oefening/', $new_afbeelding);
        return redirect()->route('oefening.index')->with('success','Oefening succesvol toegevoegd');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
