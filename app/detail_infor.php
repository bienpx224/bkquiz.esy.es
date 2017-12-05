<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_infor extends Model
{
     protected $table= "detail_infor";
     protected $fillable=['question_question_id','title','content'];
     public $timestamps= false;

     public function question(){
          return $this->belongTo('App\question');
    }
}
