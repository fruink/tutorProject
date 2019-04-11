<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UserPost extends Model
{
    

	//table name
	protected $table = 'user_posts';

	protected $fillable = ['title','user_id','subject','body'];

	//primary key
	//public $primaryKey = 'id';

	//timestamps
	public $timestamps = true;


	//create a relationship where user can only see their posts once they log in to app. forms a relation with the user and its interaction with the app. will be helpful for when students are looking to see if tutors have commented or seen their messages.
	public function user(){
		return $this->belongsTo('App\User'); //each post belongs to a user.
	}

  


}