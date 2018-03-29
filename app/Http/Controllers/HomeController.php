<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplicationType;
use App\Theme;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicationType = ApplicationType::all();
        $themes = Theme::all();
        return view('home',compact("applicationType", "themes"));
    }


}
