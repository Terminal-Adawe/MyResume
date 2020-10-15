<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class skillsController extends Controller
{
    //
    public function skills(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');

    	$data['skills'] = Skill::where('session_id','=',$sessionkey)->get();

    	return view('skills')->with('data',$data);
    }
}
