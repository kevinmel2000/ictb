<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function peserta(){
    		$user = User::where('type_participant_id', '=', '3')->get();
    	return view('admin.listparticipant', compact('user'));
    }

    public function author(){
    	$user = User::where('type_participant_id', '=', '1')->get();
    	return view('admin.listauthor', compact('user'));
    }

}
