<?php

namespace App\Http\Controllers;

use App\Models\edits;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edite= edits::all();
        return view('edits.index' , compact('edits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('edits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required||max:100|min:3',           
            'number' => 'required||max:100|min:3',           
            'comment' => 'required||max:100|min:3',           
            'image' => 'image||mimes:png,jpg|',           
        ]);
     
        $image = $request->file('image');
        $image_name=time().$image->getClientOriginalName();
        $image->move('images', $image_name);

       $edits= edits::create([
        "name"=>$request->name,
        "number"=>$request->number ,
        "date"=>$request->date,
        "image"=>"images/$image_name",
        "comment"=>$request->comment ,
       ]) ;
       return redirect()->route('edits.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(edits $edits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(edits $edits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, edits $edits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(edits $edits)
    {
        //
    }
}
