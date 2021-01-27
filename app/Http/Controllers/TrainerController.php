<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Team;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainer = User::select("*")
            ->where('role', 3)
            ->orderByDesc("name")
            ->simplePaginate();
        
        return view('trainer.index', compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainer = User::all();
        $team = Team::all();

        return view('trainer.create', compact('trainer','team'));
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

        $trainer = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $password
        ]);

        $trainer->team()->attach($request->team);

        return redirect()->back()->with('success','Er is een nieuwe trainer toegevoegd');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainer = User::find($id);
        
        return view('trainer.show')->with('trainer', $trainer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainer = User::findorfail($id);
        $team = Team::all();

        return view('trainer.edit', compact('trainer', 'team'));
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

        $trainer = User::findorfail($id);

        if($request->input('password')) {
            $trainer_data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ];
        }
        else {
            $trainer_data = [
                'name' => $request->name,
                'email' => $request->email,
            ];
        }

        $trainer->team()->sync($request->team);
        User::whereId($id)->update($trainer_data);

        return redirect()->route('trainer.index')->with('success',' trainer succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = User::findorfail($id);
        $trainer->delete();

       return redirect()->back()->with('success',' Trainer succesvol verwijderd');
    }
}
