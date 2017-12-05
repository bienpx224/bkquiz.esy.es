<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\hocsinh;
use App\test;
use App\User;
use App\question;
use App\detail_infor;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\TestRequest;
use File;
class TestController extends Controller
{
    public function getAdd(){
       return view('admin.test.add');
    }

    public function postAdd(TestRequest $request){
       $test=new test;
        $test->topic_id=$request->topic_id;
        $test->user_id=1;
        $test->is_active=1;
        $test->title=$request->title;
        $test->is_done=0;
        if ($request->hasFile('image_url')) {
          $hinh =$request->file('image_url');
          $names=str_random(7).".".$hinh->getClientOriginalExtension();;
          $hinh->move('upload/imagetest',$names);
          $test->image_url=$names;

        }

        else $test->image_url="";
        $test->save();
        $title =$request->title;
        return redirect()->route('admin.test.addquestion',$title);
    }
   public function addquestion($title){
        $data= test::select('test_id','title')->where('title',$title)->get();
        return view('admin/test/addquestion', compact('data'));
    }



    public function postquestion(QuestionRequest $request){


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

        return redirect()->route('admin.test.addquestion',$title)->with(['thongbao'=>'Success !! Completed']);
    }



   public function active(Request $rq){
      if($rq->check!=NULL)
      {
        $data=$rq->check;
        DB::table('test')->whereNotIn('test_id',$data)->update(['is_active'=>0]);
        DB::table('test')->whereIn('test_id',$data)->update(['is_active'=>1]);
      } else DB::table('test')->where('test_id','>',0)->update(['is_active'=>0]);
      return redirect()->route('admin.test.list');
   }

    public function getDelete($id){
       $qs=DB::table('question')->where('test_id',$id)->get();
       $test=test::select('image_url')->WHERE('test_id',$id)->first();
       File::delete('pulic/upload/imagetest',$test);

       foreach ($qs as $data) {
        DB::table('detail_infor')->where('question_question_id',$data->question_id)->delete() ;
        DB::table('detail_history')->where('question_question_id',$data->question_id)->delete();
       }
       DB::table('question')->where('test_id',$id)->delete();
       DB::table('feedback')->where('test_id',$id)->delete();
       DB::table('history')->where('test_id',$id)->delete();
       DB::table('test')->where('test_id',$id)->delete();

       return redirect()->route('admin.test.list');
    }

     public function getList(){
       $test= DB::table('user')->join('test','user.user_id','=','test.user_id')->get();
       return view('admin.test.list',compact('test'));
    }

    // Xuwr ly route



}
