<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPost;

class UserPostsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct() //this will restrict user from creating a post or profile, or change anything till they have successfully logged in to their account. This line of code is cool because it locks the user out and makes them sign in before they can do anything in the app. Helps with privacy aswell as authenticating users as they interact with my app.
        {
            $this->middleware('auth', ['except' => ['posts', 'show']]);
        }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //lsting of all the posts by users
    {
        //return UserPost::all();  //http://localhost:8000/userPosts
        //$UserPosts = UserPost::all();
        //return view('usersPosts')->with('$UserPosts');


        //$user_posts = UserPost::all();


        //$user_posts = UserPost::orderBy('title', 'desc')->get(); //this orders the users posts in order by first to last created. If I want to show last ocreated then I will have desc rather than asc. *Makes more sense to have the last created to appear at the top of the list of posts as each tutor or student will see the most recent post.


        //discovered this cool feature called paginate in laravel. Allows you to click on the post number to see that post. Might be a good idea to have in app but not needed.
        $user_posts = UserPost::orderBy('title', 'desc')->paginate(12);//display 5 posts, once more are created, then the paginate will appear and allow users to click specifically on the post they want to see/read. Really cool feature to add in.
        return view('usersPosts',['user_posts' => $user_posts]);
        //return $user_posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //represents forms user fills out.
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //stores and submitting form to db.
    {
        //store post after usr has created it.

        //validate the post.
        $this->validate($request, [

            //list what they user must include before the post can be submited.
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required'

        ]);

        //create a post
        $UserPost = new UserPost;
        $UserPost->title = $request->input('title');
        //$UserPost->subject = $request->input('user_id');
        $UserPost->user_id = auth()->user()->id;//want the user for authentication. will get the logged in user.
        $UserPost->name = auth()->user()->id;
        $UserPost->subject = $request->input('subject');
        $UserPost->body = $request->input('body');
        $UserPost->save();

        //redirect user to users post page after post has been created.
        return redirect('/posts')->with('success', 'Post Has Been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //showing a single post.
    {
        //$UserPost = UserPost::find($id); //will find each post by it's id from the database.
        //return view('show')->with('$UserPost');

        //return UserPost::find($id);
        $UserPost = UserPost::find($id);
        return view('show')->with('UserPost', $UserPost);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //edit form for user.
    {
        $UserPost = UserPost::find($id);
         return view('edit')->with('UserPost', $UserPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //update a post by users request.
    {
         $this->validate($request, [

            //list what they user must include before the post can be submited.
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required'

        ]);

        //create a post
        $UserPost = UserPost::find($id);
        $UserPost->title = $request->input('title');
        //$UserPost->subject = $request->input('user_id');
        $UserPost->user_id = auth()->user()->id;//want the user for authentication. will get the logged in user.
        $UserPost->name = auth()->user()->id;
        $UserPost->subject = $request->input('subject');
        $UserPost->body = $request->input('body');
        $UserPost->save();

        //redirect user to users post page after post has been created.
        return redirect('/posts')->with('success', 'Your post is now updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //delete the posts by user.
    {
        $UserPost = UserPost::find($id);
        $UserPost->delete();
        return redirect('/posts')->with('success', 'Your post has been destroyed!');
    }
}
