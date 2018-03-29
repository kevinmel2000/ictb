<?php

namespace App\Http\Controllers;

use App\User;

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
        foreach($subthemes as $sub){
            echo "<option value='".$sub->id."'>".$sub->sub_theme."</option>";
        }
    }
}
