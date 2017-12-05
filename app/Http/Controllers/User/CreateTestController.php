<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\QuizRequest;
use App\Http\Requests\QuestionRequest;
use App\hocsinh;
use App\test;
use App\question;
use App\detail_infor;
class CreateTestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCreateTest(){
        return view('user.VanCao.create-test');
    }

    public function postCreateTest(QuizRequest $request){


        $test=new test;
        $test->topic_id=$request->topic_id;
        $test->user_id=Auth::user()->user_id;
        $test->title=$request->title;
        $test->is_done=0;
        if ($request->hasFile('image_url')) {
          $hinh =$request->file('image_url');
          $name=$hinh->getClientOriginalName();
          $names=str_random(4)."_".$name;
          $hinh->move('public/upload/imagetest',$names);
          $test->image_url=$names;

        }else $test->image_url="";
        $test->save();
        $title =$request->title;
        return redirect()->route('createQuestion',$title);

    }

    public function set(){

        $data= test::select('test_id','title')->where('test_id',1)->get();
        return redirect()->route('get')->with(['thongbao'=>'ses']);
     }
     public function get(request $request){
          echo  $_COOKIE["vai"];
    }

    public function getCreateQuestion($title){
        $data= test::select('test_id','title')->where('title',$title)->get();
        return view('user.VanCao.create-question', compact('data'));
    }

    public function postCreateQuestion(QuestionRequest $request){



        $question=new question;
        $question->test_id=$request->test_id;
        $question->question=$request->question;
        $question->answer_a=$request->answer_a;
        $question->answer_b=$request->answer_b;
        $question->answer_c=$request->answer_c;
        $question->correct_answer=$request->correct_answer;

        $question->number_a=0;
        $question->number_b=0;
        $question->number_c=0;

        $question->number_a=1;
        $question->number_b=1;
        $question->number_c=1;
        $question->save();


        if($request->content!=NULL)
        {
          $detail_infor=new detail_infor;
          $qs=question::select('question_id')->where('question',$request->question)->get();
              foreach ($qs as $qsdt)
              {
               $question_question_id =$qsdt->question_id;
              }
               $detail_infor->title="";
          $detail_infor->question_question_id=$question_question_id;
          $detail_infor->content=$request->content;
          $detail_infor->save();
        }

        $data= test::select('test_id','title')->where('test_id',$request->test_id)->get();
        foreach ($data as $dt) {
          $title =$dt->title;
        }

        return redirect()->route('createQuestion',$title)->with(['thongbao'=>'Success !! Completed']);
    }

}
