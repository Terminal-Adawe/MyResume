<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal_detail;
use App\Education;
use App\Professional_experience;
use App\Certification;
use App\Skill;
use App\Hobby;
use App\Summary;
use DB;

class viewResumeController extends Controller
{
    //
    public function viewtemplates(){
    	

    	return view('templates');
    }

    public function viewresume(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');
    	$hiddencheck = $request->hiddencheck;

    	$data['personaldetails'] = Personal_detail::where('session_id','=',$sessionkey)
    		->first();

    	$data['education'] = Education::join('certifications','certifications.id','=','education.certification_id')->where('session_id','=',$sessionkey)
    		->get();

    	$data['professionalexperience'] = Professional_experience::where('session_id','=',$sessionkey)
    		->get();

    	$data['skills'] = Skill::where('session_id','=',$sessionkey)
    		->get();

    	$data['hobbies'] = Hobby::where('session_id','=',$sessionkey)
    		->get();

    	$data['summary'] = Summary::where('session_id','=',$sessionkey)
    		->first();

    	return view('template1')->with('data',$data);
    }
}
