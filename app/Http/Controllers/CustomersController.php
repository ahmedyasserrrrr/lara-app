<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=customers::all();
        return view('customers.index',compact('customers') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

  
    public function store(Request $request)
    {
            $validated = $request->validate([
                'name' => 'required|:|max:100|min:3',           
                'date' => 'required',           
                'comment' => 'required',           
            ]);
           $customers= customers::create([
            "name"=>$request->name,
            "date"=>$request->date,
            "comment"=>$request->comment,
           ]) ;
            return redirect()->route('home');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customers $customers)
    {
        return view('customers.edit' , compact('customers') );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customers $customers)
    {
        $customers->name = $request->name;
        $customers->comment = $request->comment;
        $customers->save();
        return redirect()->route('home')->with('succses', 'update added' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customers $customers)
    {
        $customers->delete();
        return redirect()->route('home');

    }
}
