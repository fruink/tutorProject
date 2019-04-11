<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Writer;

class Script extends Model {

	protected $fillable = ['title','year','writer_id', 'created_at', 'genre', 'storyline'];   
	//protected $table = 'tbl_scripts';


public function writer() { // links scripts to an writer 
	return $this->belongsTo('App\Writer');
}

}
