<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobby;

class hobbiesController extends Controller
{
    //
    public function hobbies(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');

    	$data['hobbies'] = Hobby::where('session_id','=',$sessionkey)->get();

    	return view('hobbies')->with('data',$data);
    }
}
