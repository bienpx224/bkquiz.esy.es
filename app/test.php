<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table= "test";
    protected $fillable=['topic_id','user_id','title','is_active','is_seen','is_done','image_url'];
    public $timestamps= false;

    public function user(){
     	return $this->belongTo('App\User');
     }


    public function question(){
     	return $this->hasMany('App\question');
     }
}