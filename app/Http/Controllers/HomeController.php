<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Training;
use App\Models\Melding;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oefeningcount = DB::table('oefening')->count();
        $teamcount = DB::table('team')->count();
        $trainingcount = DB::table('training')->count();
        $spelercount = DB::table('users')->where('role', 1)->count();
        

        $training = Training::select("*")
            ->orderByDesc("created_at")
            ->limit("10")
            ->get();

        $melding = Melding::select("*")
            ->orderByDesc("created_at")
            ->limit("3")
            ->get();
  

        return view('home', compact('training', 'melding') ,['oefeningcount' => $oefeningcount, 'teamcount' => $teamcount , 'trainingcount' => $trainingcount , 'spelercount' => $spelercount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
