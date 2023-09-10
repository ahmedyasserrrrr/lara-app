<?php

namespace App\Http\Controllers;

use App\Models\employs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmploysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employs= employs::all();
        return view('employs.index' , compact('employs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required||max:100|min:3',   
            'number' => 'required||max:100|min:3',           
            'age' => 'required||',           
            'comment' => 'required||max:100|min:3',           
        ]);
     
       $forms= employs::create([
        "name"=>$request->name,
        "number"=>$request->number ,
        "age"=>$request->age ,
        "comment"=>$request->comment ,
       ]) ;
       return redirect()->route('employs.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(employs $employs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employs $employs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employs $employs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employs $employs)
    {
        //
    }
}
