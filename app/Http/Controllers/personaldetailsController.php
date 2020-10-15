<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal_detail;

class personaldetailsController extends Controller
{
    //
    public function personaldetails(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');

    	$data['personaldetails']=Personal_detail::where('session_id','=',$sessionkey)
    							->first();

    	return view('personaldetails')->with('data',$data);
    							// echo $data['personaldetails'];
    }
}
