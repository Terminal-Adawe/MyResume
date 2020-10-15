<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summary;

class summaryController extends Controller
{
    //
    public function summary(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');

    	$data['summary']=Summary::where('session_id','=',$sessionkey)
    							->first();

    	return view('summary')->with('data',$data);
    							// echo $data['personaldetails'];
    }
}
