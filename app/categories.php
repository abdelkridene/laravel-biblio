<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable=['name'];

    public function livres(){


    	return $this->hasMany('App\livre');
    }
}
