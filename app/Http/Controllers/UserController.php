<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\user;
class UserController extends Controller
{
   public function getAdd(){
       return view('admin.user.add');
    }

     public function getList(){
       $user= DB::table('user')->where('authority',1)->get();
       return view('admin.user.list',compact('user'));
    }


    public function getEdit(){

    }

     public function active(Request $rq){
      if($rq->check!=NULL)
      {
        $data=$rq->check;
        DB::table('user')->where('authority',1)->whereNotIn('user_id',$data)->update(['is_active'=>0]);
        DB::table('user')->where('authority',1)->whereIn('user_id',$data)->update(['is_active'=>1]);
      } else DB::table('user')->where('authority',1)->where('user_id','>',0)->update(['is_active'=>0]);
      return redirect()->route('admin.user.list');
   }



    public function getDelete($user_id){
       $t=DB::table('test')->where('user_id',$user_id)->get();
       foreach ($t as $t_id) {
       $id=$t_id->test_id;
       $qs=DB::table('question')->where('test_id',$id)->get();

       foreach ($qs as $data) {
        DB::table('detail_infor')->where('question_question_id',$data->question_id)->delete() ;
        DB::table('detail_history')->where('question_question_id',$data->question_id)->delete();
       }
       DB::table('question')->where('test_id',$id)->delete();
       DB::table('feedback')->where('test_id',$id)->delete();
       DB::table('history')->where('test_id',$id)->delete();
       DB::table('test')->where('test_id',$id)->delete();
       }
       DB::table('user')->where('user_id',$user_id)->delete();
       return redirect()->route('admin.user.list');
    }

}
