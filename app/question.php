<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
     protected $table= "question";

     protected $fillable=['question_id','test_id','question','answer_a','answer_b','answer_c','answer_d','correct_answer','number_a','number_b','number_c','number_d'];
     
     public $timestamps= false;

     public function detail_infor(){
          return $this->hasOne('App\detail_infor');
    }

    public function test(){
     	return $this->belongTo('App\test');
     }
}
