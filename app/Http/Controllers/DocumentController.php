<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document = Document::paginate(10);
        return view('document.index', compact('document'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'link' => 'required|max:2048',
    
        ]);
    
           $titel = $request->file('image')->getClientOriginalName();
    
           $link = $request->file('image')->store('public/images');
    
    
           $save = new Photo;
    
           $save->titel = $titel;
           $save->link = $link;
    
           return redirect()->route('document.index')->with('success','De post is succesvol toegevoegd');
    




        // $this->validate($request, [
        //     'titel' => 'required'
        // ]);

        // $image = $request->file('link');
        // $imageName = time(). '.' . $image->extension();
        // $image->move(public_path('images'),$imageName);


        // $post = Posts::create([
        //     'titel' => $request->titel,
        //     'link' => 'public/uploads/documenten/'.$imageName
        // ]);

        // $post->tags()->attach($request->tags);

        // //$afbeelding->move('public/uploads/documenten/', $new_afbeelding);
        // return redirect()->route('document.index')->with('success','De post is succesvol toegevoegd');
    
         




        // $document = new Document;
        // if($request->link('link')){
        //     $link=$request->file('link');
        //     $filename=time().'.'.$link->getClientOriginalExtension();
        //     $request->link->move('public/uploads/documenten/'.$filename);

        //     $document->link = $filename;
        // }

        // $document->titel=$request->titel;
        // $document->save();


        //$file->move('public/uploads/documenten/', $new_file);
        //return redirect()->route('document.index')->with('success','Document succesvol toegevoegd');
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

    // public function downfunc() {
    //    $downloads=DB::table('document')->get; 
    //    return view('download.viewfile', compact('downloads'));
    // }
}
