<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AJAXController extends Controller
{

    public function checkmail(Request $request)
    {
        if(User::where('email', '=', $request->input('email'))->count() == 0){
            echo "true";
        }else{
            echo "false";
        }

    }


    public function checksubtheme(Request $request)
    {
        $subthemes = Theme::find($request->input('id'))->subthemes;
        $selected = $request->input('selected');

        foreach($subthemes as $sub){
            echo "<option value='".$sub->id."'";
            if($sub->id == $selected)
                echo " selected";
            echo ">".$sub->sub_theme."</option>";
        }
    }

    
    public function component($component){
        $user = Auth::user();

        if($component == "idstudent"){
            return view('component/studentid');
        }else if($component == "havesupport"){
            return view('component/havesupport', compact("user"));
        }else if($component == "nosupport"){
            return view('component/nosupport', compact("user"));
        }
    }
}
