<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\topic;
use App\test;
use App\question;
use DB;
class PageController extends Controller
{

   public function __construct(){
     $topics= topic::all();
   	 $topicsHis= DB::table('topic')->join('test','topic.id','=','test.topic_id')->where('name','LIKE','Lịch sử')->where('test.is_active','LIKE','1')->orderBy('is_seen','INCR')->get();
     $topicsDiaLi= DB::table('topic')->join('test','topic.id','=','test.topic_id')->where('name','LIKE','Địa lý')->where('test.is_active','LIKE','1')->orderBy('is_seen','INCR')->get();
     $topicsVan= DB::table('topic')->join('test','topic.id','=','test.topic_id')->where('name','LIKE','Văn học')->where('test.is_active','LIKE','1')->orderBy('is_seen','INCR')->get();
     $topicsMath= DB::table('topic')->join('test','topic.id','=','test.topic_id')->where('name','LIKE','Toán học')->where('test.is_active','LIKE','1')->orderBy('is_seen','INCR')->get();
     $topicsSport= DB::table('topic')->join('test','topic.id','=','test.topic_id')->where('name','LIKE','Thể thao')->where('test.is_active','LIKE','1')->orderBy('is_seen','INCR')->get();
     $topicsKHXH= DB::table('topic')->join('test','topic.id','=','test.topic_id')->where('name','LIKE','Khoa học-Xã hội')->where('test.is_active','LIKE','1')->orderBy('is_seen','INCR')->get();
     view()->share(['topicsHis'=>$topicsHis,
     'topics'=>$topics,
     'topicsDiaLi'=>$topicsDiaLi,
     'topicsVan'=>$topicsVan,
     'topicsMath'=>$topicsMath,
     'topicsSport'=>$topicsSport,
     'topicsKHXH'=>$topicsKHXH]);
   }
   public function trangchu(){

   	return view('page.home');

   }
   public function getHome ()
   {
     return view('page.home');
   }
   public function test($id){
        $test= test::find($id);
        $question = question::where('test_id',$id)->paginate(3);

   	  return view('page.LoaiTin',['test'=>$test,'question'=>$question]);

   }
}
