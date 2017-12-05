<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    //
    protected $table = 'topic';
    public function test(){
        return $this->hasMany('App\test','topic_id','test_id');
    }
    public function question(){
        return $this->hasManyThrough('App\question','App\test','topic_id','test_id');
    }

}
