<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\question;
use App\detail_infor;

class QuestionController extends Controller
{
    
     public function getAdd($id){
      $test= DB::table('user')->join('test','user.user_id','=','test.user_id')->where('test_id',$id)->get();
       return view('admin.test.list',compact('test'));
     }

    public function getEdit($id){
      $data=DB::table('question')->where('test_id',$id)->get(); 
       $data1=DB::table('test')->where('test_id',$id)->get(); 
      foreach ($data1 as $dt1) {
        $data2=$dt1->title;
      }
     
      return view('admin.question.info',compact('data','data2'));
       
    }

    public function getList(){
       $fb= DB::table('feedback')->get();
       return view('admin.question.list',compact('fb'));
    }


    public function getDelete($id){
       
       DB::table('feedback')->where('feedback_id',$id)->delete();       
      return redirect()->route('admin.question.list');
    }

    public function active(Request $rq){
      if($rq->check!=NULL)
      {
        $data=$rq->check;
        DB::table('feedback')->whereNotIn('feedback_id',$data)->update(['is_active'=>0]);
        DB::table('feedback')->whereIn('feedback_id',$data)->update(['is_active'=>1]);
      } else DB::table('feedback')->where('feedback_id','>',0)->update(['is_active'=>0]);
      return redirect()->route('admin.question.list');
   }
}
