<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable=['titre','description','nbr','auteur','category_id'];

    public function category(){

    	return $this->belongsTo('App\categories');
    }

}
