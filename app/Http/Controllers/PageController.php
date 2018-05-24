<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;


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


    
    public function download($filename){
        
        if($filename == "abstracttemplate"){
            return Storage::download('public/files/Extended Abstract Template - ICTB 2018.docx');
        }else if($component == "havesupport"){
            return view('component/havesupport', compact("user"));
        }else if($component == "nosupport"){
            return view('component/nosupport', compact("user"));
        }
    }

}
