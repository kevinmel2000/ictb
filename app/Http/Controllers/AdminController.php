<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Application;

class AdminController extends Controller
{
    public function peserta(){
    		$user = User::where('type_participant_id', '=', '3')->get();
    	return view('admin.listparticipant', compact('user'));
    }

    public function author(){
    	$user = User::with('country', 'application')->where('type_participant_id', '=', '1')->get();
    	return view('admin.listauthor', compact('user'));
    }

    public function abstracts(){
    	$abstracts = Application::with('subtheme', 'subtheme.theme', 'apptype', 'participant', 'publicationtype')->get();
    	return view('admin.listabstract', compact('abstracts'));
    }


}
