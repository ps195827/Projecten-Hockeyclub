<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::paginate();
        return view('video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
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
            'omschrijving' => 'required' ,
            'link' => 'required'
        ]);

        $video = Video::create([ 
            'titel' => $request->titel,
            'omschrijving' => $request->omschrijving,
            'link' => $request->link
        ]);

        return redirect()->back()->with('success',' Video succesvol toegevoegd');
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
        $video = Video::findorfail($id);
        return view('video.edit', compact('video'));
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
            'omschrijving' => 'required' ,
            'link' => 'required'
        ]);

        $video_data = [
            'titel' => $request->titel,
            'omschrijving' => $request->omschrijving,
            'link' => $request->link
        ];

        Video::whereId($id)->update($video_data);

        return redirect()->route('video.index')->with('success',' Video succesvol geupgedate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::findorfail($id);
        $video->delete();

       return redirect()->back()->with('success',' Video succesvol verwijderd');
    }
}
