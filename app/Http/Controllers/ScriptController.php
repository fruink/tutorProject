<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Script; //links this controller with the related model

class ScriptController extends Controller 
{



     /**
     * Create a new controller instance.
     *
   //  * @return void
     */
     //   public function __construct() //this will restrict user from creating a post or profile, or change anything till they have successfully logged in to their account. This line of code is cool because it locks the user out and makes them sign in before they can do anything in the app. Helps with privacy aswell as authenticating users as they interact with my app.
     //   {
    //        $this->middleware('auth');
   //     }



    public function getAllScripts() {
    	
    	$scriptlist = Script::select()->with('writer')->get();
    	 // this runs mysqli_query('SELECT * FROM scripts');
    	
    	return view('scripts',['scripts' => $scriptlist]);
    }

    public function addScript() {
		$data = request()->input();
    	$validator = validator()->make($data,[
    		'scripttitle' => 'required',
    		'year' => 'required',
    		'genre' => 'required',
            'storyline' => 'required'
    	]);

//only run the code below if validation is passed
    	if($validator->passes()) {
    	$script = new Script([
    		'title' => request()->input('scripttitle'),
    		'year' => request()->input('year'),
    		'genre' => request()->input('genre'),
            'storyline' => request()->input('storyline'),
            'writer_id' => request()->input('writid') 
    	]);

    	$script->save();
    	return redirect()->back();
	    }

    	return redirect()->back()->withErrors($validator->errors())->withInput();
    }

    }
    
