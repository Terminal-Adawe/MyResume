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

class savedetailsController extends Controller
{
    //
    public function savepersonaldetails(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');
    	$surname = $request->surname;
    	$othernames = $request->othernames;
    	$email = $request->email;
    	$country = $request->country;
    	$city = $request->city;
    	$address = $request->address;
    	$contact1 = $request->contact1;
    	$contact2 = $request->contact2;

    	$checker = Personal_detail::select('session_id')->where('session_id',$sessionkey)->exists();

    	echo $sessionkey." and checker is ".$checker;

    	$data = ['session_id'=>$sessionkey,'surname'=>$surname,'other_names'=>$othernames,'email'=>$email,'city'=>$city,'country'=>$country,'address'=>$address,'contact_number_1'=>$contact1,'contact_number_2'=>$contact2];

    	if($checker){
    		// echo $sessionkey." in checker true ".$checker;
    		DB::table('personal_details')->update($data);
    	} else {
    		// echo $sessionkey." in checker false ".$checker;
    		$insertid = DB::table('personal_details')->insertGetId($data);
    	}

    	return redirect('/professionalexperience');
    }

    public function saveeducationdetails(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');
    	$school = $request->school;
    	$certification = $request->certification;
    	$courses = $request->courses;
    	$country = $request->country;
    	$city = $request->city;
    	$address = $request->address;
    	$fromdate = $request->fromdate;
    	$todate = $request->todate;
    	$projects = $request->projects;
    	$hiddencheck = $request->hiddencheck;

    	// $checker = Education::select('session_id')->where('session_id',$sessionkey)->exists();

    	// echo $sessionkey." and checker is ".$checker;

    	$certificateid = Certification::select('id')->where('certification',$certification)->first();

    	$data = ['session_id'=>$sessionkey,'school'=>$school,'certification_id'=>$certificateid->id,'courses'=>$courses,'country'=>$country,'address'=>$address,'date_started'=>$fromdate,'date_ended'=>$todate];

    	// echo "But I'm here ".$checker;

    		if(trim($school)=="" || trim($country) =="" || trim($address)=="" || $fromdate=="" || $todate==""){  } else {
    		// echo $sessionkey." in checker false ".$checker;
    		$insertid = DB::table('education')->insertGetId($data);
    		}
    	
        // Hidden check of 1 means the page should be redirected to the next page
    	if($hiddencheck=='1'){
    		return redirect('/skills');
    	}
    	return redirect('/education');
    }

    public function saveprofesionaldetails(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');
    	$company = $request->company;
    	$role = $request->role;
    	$country = $request->country;
    	$city = $request->city;
    	$address = $request->address;
    	$fromdate = $request->fromdate;
    	$todate = $request->todate;
    	$duties = $request->duties;
    	$projects = $request->projects;
    	$hiddencheck = $request->hiddencheck;

    	// $checker = Professional_experience::select('session_id')->where('session_id',$sessionkey)->exists();

    	// echo $sessionkey." and checker is ".$checker;


    	$data = ['session_id'=>$sessionkey,'company'=>$company,'role'=>1,'role'=>$role,'city'=>$city,'country'=>$country,'address'=>$address,'duties'=>$duties,'projects'=>$projects,'date_started'=>$fromdate,'date_ended'=>$todate];

    	// echo "company name is ".$company." and role is ".$role." and address is ".$address." and from date is ".$fromdate." and to date is ".$todate." and duties are ".$duties;
    	// echo "session key in saved is ".$sessionkey;

    	if(trim($company)=="" || trim($role)=="" || trim($country) =="" || trim($city)=="" || trim($address)=="" || $fromdate=="" || $todate=="" || $duties==""){  } else {
    		// echo "will insert if hidden check is 0. Hidden check is ".$hiddencheck;
    		// if($hiddencheck==0){
    		// echo $sessionkey." in checker false ".$checker;
    		$insertid = DB::table('professional_experiences')->insertGetId($data);
    		// }
    	}

    	// Hidden check of 1 means the page should be redirected to the next page
    	if($hiddencheck=='1'){
    		return redirect('/education');
    	}
    	return redirect('/professionalexperience');
    }

    public function saveskill(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');
    	$skill = $request->skill;
    	$hiddencheck = $request->hiddencheck;


    	// echo $sessionkey." and checker is ".$checker;


    	$data = ['session_id'=>$sessionkey,'skill'=>$skill];

    	if(trim($skill)==""){  } else {
    		// echo $sessionkey." in checker false ".$checker;
    		$insertid = DB::table('skills')->insertGetId($data);
    	}

    	// Hidden check of 1 means the page should be redirected to the next page
    	if($hiddencheck=='1'){
    		return redirect('/hobbies');
    	}

        // Hidden check of 1 means the page should be redirected to the next page
        if($hiddencheck=='10'){
            return redirect('/viewtemplates');
        }

    	return redirect('/skills');
    }

    public function savehobby(Request $request){
    	$sessionkey = $request->session()->get('_token', 'default');
    	$hobby = $request->hobby;
    	$hiddencheck = $request->hiddencheck;


    	// echo $sessionkey." and checker is ".$checker;


    	$data = ['session_id'=>$sessionkey,'hobby'=>$hobby];

    	if(trim($hobby)==""){  } else {
    		// echo $sessionkey." in checker false ".$checker;
    		$insertid = DB::table('hobbies')->insertGetId($data);
    	}

    	// Hidden check of 1 means the page should be redirected to the next page
    	if($hiddencheck=='1'){
    		return redirect('/summary');
    	}

         // Hidden check of 1 means the page should be redirected to the next page

        if($hiddencheck=='10'){
            return redirect('/viewtemplates');
        }

    	return redirect('/hobbies');
    }

    public function savesummary(Request $request){
        $sessionkey = $request->session()->get('_token', 'default');
        $summary = $request->summary;
        $hiddencheck = $request->hiddencheck;


        $checker = Summary::select('session_id')->where('session_id',$sessionkey)->exists();

        // echo $sessionkey." and checker is ".$checker;

        $data = ['session_id'=>$sessionkey,'summary'=>$summary];

        if(trim($summary)==""){  } else {

        if($checker){
            // echo $sessionkey." in checker true ".$checker;
            DB::table('summaries')->update($data);
        } else {
            // echo $sessionkey." in checker false ".$checker;
            $insertid = DB::table('summaries')->insertGetId($data);
        }

        }

        // Hidden check of 1 means the page should be redirected to the next page
        if($hiddencheck=='1'){
            return redirect('/addmore');
        }

         // Hidden check of 1 means the page should be redirected to the next page

        if($hiddencheck=='10'){
            return redirect('/viewtemplates');
        }

        return redirect('/summary');
    }
}
