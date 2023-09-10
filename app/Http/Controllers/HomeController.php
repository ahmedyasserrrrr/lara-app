<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers=customers::all();
        $customers = customers::paginate(5);
        return view('layouts.home' ,compact('customers'));
    }
}
