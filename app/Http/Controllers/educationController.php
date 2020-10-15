<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certification;
use App\Education;

class educationController extends Controller
{
    //
    public function education(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');

    	$data['certificates'] = Certification::all();
    	$data['education'] = Education::where('session_id','=',$sessionkey)->get();

    	return view('education')->with('data',$data);
    }
}
