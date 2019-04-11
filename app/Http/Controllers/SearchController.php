<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{


	 public function __construct() //this will restrict user from creating a post or profile, or change anything till they have successfully logged in to their account. This line of code is cool because it locks the user out and makes them sign in before they can do anything in the app. Helps with privacy aswell as authenticating users as they interact with my app.
        {
            $this->middleware('auth', ['except' => ['writers', 'show']]);
        }



    public function getAllScriptwriters() //getAllScriptWriters controller
	{
		return view('search');
	} 
	
	public function search(Request $request) //search controller
	{
		$results = DB::select()->where('name', 'like', '%'.$str.'%')->get();
    return view('searchResults',['writers' => $results]);
	}

	
}
