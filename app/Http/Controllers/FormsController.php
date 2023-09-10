<?php

namespace App\Http\Controllers;

use App\Models\forms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms= forms::all();
        return view('forms.index' , compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.create')->with('forms' ,forms::all() );
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

       $forms= forms::create([
        "name"=>$request->name,
        "image"=>"images/$image_name",
        "nems"=>$request->nems,
        "number"=>$request->number ,
        "option"=>$request->option ,
        "time"=>$request->time ,
        "comment"=>$request->comment ,
       ]) ;
       return redirect()->route('forms.index')->with('succses', 'forms added' );
    }
    /**
     * Display the specified resource.
     */
    public function show(forms $forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(forms $forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, forms $forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(forms $forms)
    {
        //
    }
}
