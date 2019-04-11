<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Script;


class Writer extends Model
{
    protected $fillable = ['name','writer_photo', 'bio', 'country', 'title']; //backup sql query, make sure to add here when adding in new content to tbl_writers

    

    public function scripts() {
    	return $this->hasMany('App\Script');
    }

}
