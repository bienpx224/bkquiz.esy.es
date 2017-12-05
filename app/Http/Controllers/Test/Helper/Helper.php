<?php
/**
 * Created by PhpStorm.
 * User: DucHai
 * Date: 24/04/2017
 * Time: 11:19 SA
 */
namespace App\Http\Controllers\Test\Helper;
use Illuminate\Support\Facades\DB as DB;
class Helper{
    public function test(){
        return 'Test';
    }

    public function getQuestions($testId){
        $questions= DB::table('question')->where('test_id',$testId)->get();
        return $questions;
    }

    public function getAnswers($question){
        $answers=[
            '0'=>$question->answer_a,
            '1'=>$question->answer_b,
            '2'=>$question->answer_c
        ];
        return $answers;
    }

    public function getTrueFalseArray($correctAnswer){
        $array=[
            '1'=>'0',
            '2'=>'0',
            '3'=>'0'
        ];
        $array[$correctAnswer]='1';
        return $array;
    }

    public function getPercentArray($question){
        $a=(int)$question->number_a;
        $b=(int)$question->number_b;
        $c=(int)$question->number_c;
        $total=$a+$b+$c;
        $array=[
            '1'=>'0',
            '2'=>'0',
            '3'=>'0'
        ];
        $percent=$a/$total;
        $percentA=round($percent,4);
        $percent=$b/$total;
        $percentB=round($percent,4);
        $percent=$c/$total;
        $percentC=round($percent,4);
        $array['1']=$percentA*100;
        $array['2']=$percentB*100;
        $array['3']=$percentC*100;
        return $array;
    }

    public function getTitle($testId){
        $test = DB::table('test')->where('test_id',$testId)->get();
        foreach ($test as $a){
          return $a->title;
        };
    }

    public function getDetailInfo($questionId){
        $info=DB::table('detail_infor')->where('question_question_id',$questionId)->first();
        if($info!=null) {
            return $info->content;
        }
        return 'Không có thông tin cụ thể';
    }
};
