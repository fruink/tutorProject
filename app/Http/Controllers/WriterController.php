<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Writer;

class WriterController extends Controller
{

     public function __construct() //this will restrict user from creating a post or profile, or change anything till they have successfully logged in to their account. This line of code is cool because it locks the user out and makes them sign in before they can do anything in the app. Helps with privacy aswell as authenticating users as they interact with my app.
        {
            $this->middleware('auth', ['except' => ['posts', 'show']]);
        }



    public function getAllWriters() {
    	$writers = Writer::select()->get();
    	
    	return view('writers',['title' => 'Writer List', 'writers' => $writers]);
    }


    public function getOneWriter($id) {
    	$writer = Writer::select()->where('id', $id)->with('scripts')->first(); // this scripts is the name of the function the author model
    	return view('writer_profile',['title' => 'Writer Profile', 'writer' => $writer]);
    
    }


    public function searchWriters($str) {
        
        $results = Writer::select()->where('name', 'like', '%'.$str.'%')->get();
        
        //return $results;
        return view('searchResults',['title' => 'Search Results', 'writers' => $results]);


    }


    



//routes for adding a new writer

    public function showWriterForm() {
    	//renders static form view, show the form to the user
    	$writers = Writer::select()->get();
    	return view('writer_form',['title' => 'Content Management','writers' => $writers]);
    }

    public function addWriter() {
    	//takes submitted form content adds it to table writers
    	$data = request()->input();
    	$validator = validator()->make($data,[
    		'writname' => 'required|max:25',
            'bio' => 'required|max:100',
            'country' => 'required',
            'title' => 'required'
    	]);

        //only run the code below if validation is passed
    	if($validator->passes()) {
            $path = request()->file('photo')->store('photos');
    	    $writer = new Writer([
    		'name' => request()->input('writname'),
            'bio' => request()->input('bio'),
            'country' => request()->input('country'),
            'title' => request()->input('title'),
            'writer_photo' => $path
    	]);
    	
        $writer->save();

    	return redirect('/writers');
    }

    return redirect()->back()->withErrors($validator->errors())->withInput();

    }


    public function deleteWriter($id) {
    	$writer = Writer::find($id);
        Storage::delete($writer->writer_photo);
        $writer->delete();
        
        return redirect('/writers');	
    }



}
