<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional_experience;

class professionalexperienceController extends Controller
{
    //
    public function professionalexperience(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');

    	$data = $request->session()->all();

    	if($sessionkey=="0"){
    		// return redirect('/');
    	}

    	$data['professionalexperience'] = Professional_experience::where('session_id','=',$sessionkey)
    		->get();

    	return view('professionalexperience')->with('data',$data);
    }
}
