<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Moeilijkheidsgraad;
use App\Models\Oefening;
use App\Models\Werkvorm;
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
        $werkvorm = Werkvorm::all();
        $moeilijkheidsgraad = Moeilijkheidsgraad::all();
        $leerfase = Leerfase::all();
        $sector = Sector::all();
        $subsector = Subsector::all();
        $domein = Domein::all();
        $spelfase = Spelfase::all();
        $trainingsonderdeel = Trainingsonderdeel::all();
        return view('oefening.create', compact('domein','sector','subsector','leerfase','spelfase','trainingsonderdeel','moeilijkheidsgraad','werkvorm'));
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
            'leerfase_id' => 'required',
            'moeilijkheidsgraad_id' => 'required',
            'duur' => 'required'
        ]);

        $oefening = Oefening::create([
            'titel' => $request->titel,
            'domein_id' => $request->domein_id,
            'sector_id' => $request->sector_id,
            'subsector_id' => $request->subsector_id,
            'leerfase_id' => $request->leerfase_id,
            'moeilijkheidsgraad_id' => $request->moeilijkheidsgraad_id,
            'beschrijving' => $request->beschrijving,
            'spelfase_id' => $request->spelfase_id,
            'trainingsonderdeel_id' => $request->trainingsonderdeel_id,
            'duur' => $request->duur,
            'hulpmiddelen' => $request->hulpmiddelen,
            'aandachtspunten' => $request->aandachtspunten,
            'werkvorm_id' => $request->werkvorm_id,
            'fouten' => $request->fouten,
            'filmpje' => $request->filmpje,
            'afbeelding' => $request->afbeelding,
            'makkelijkmaken' => $request->makkelijkmaken,
            'moeilijkmaken' => $request->moeilijkmaken,
            'tips' => $request->tips,
            'auteur' => Auth::id(),
            'slug' => Str::slug($request->titel)
        ]);

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
        $oefening = Oefening::find($id);

        $moeilijkheidsgraad = Moeilijkheidsgraad::all();

        return view('oefening.show')->with('oefening', $oefening);
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
