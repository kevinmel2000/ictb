<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
  
     public function summary(){
        echo "sumary page";
    }

    public function about(){
        return view('about');
    }

    public function committee(){
        return view('committee');
    }

    public function speaker(){
        return view('speaker');
    }

    public function theme(){
        return view('theme');
    }

    public function schedule(){
        return view('schedule');
    }

    public function guideline(){
        return view('guideline');
    }

   public function guidelineauthor(){
        return view('guidelineauthor');
    }

    public function exhibition(){
        return view('exhibition');
    }

    public function venue(){
        return view('venue');
    }

    public function accomodation(){
        return view('accomodation');
    }
}
