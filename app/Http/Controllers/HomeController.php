<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paket = \App\Paket::paginate(5);
        // return view('admin.paket.index', compact('paket'));
        return view('home', compact('paket'));
    }
    public function investasi()
    {
        $paket = \App\Paket::all();
        return view('investasi', compact('paket'));
    }
    public function show($id)
    {
        $paket = \App\Paket::findOrFail($id);
        return view('singlepackage', compact('paket'));
    }
    public function maintenance()
    {
        return view('maintenance.index');
    }
    public function term()
    {
        return view('term');
    }

    // public function see()
    // {
    //     return Redirect::away('term');
    // }
}
