<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct() //this will restrict user from creating a post or profile, or change anything till they have successfully logged in to their account. This line of code is cool because it locks the user out and makes them sign in before they can do anything in the app. Helps with privacy aswell as authenticating users as they interact with my app.
        {
            $this->middleware('auth');
        }

	

}
