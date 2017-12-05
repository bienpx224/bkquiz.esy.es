<?php
/**
 * Created by PhpStorm.
 * User: DucHai
 * Date: 24/04/2017
 * Time: 10:48 SA
 */
namespace App\Http\Controllers\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Test\Helper\Helper;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
class DoTestController extends Controller
{
    public function getTestPage($id,Request $request){
//        Log::debug("Test");
        $helper=new Helper();
        $data['id']=$id;
        $data['block']=$helper;
        $data['test']=DB::table('test')->where('test_id','LIKE',$id)->get();
				
				DB::table('test')->where('test_id','=',$id)->increment('is_seen');
        return view("test.index",$data);
    }

    public function save(Request $request){
//        $id=$_POST['id'];
//        $answer=$_POST['answer'];
//        $data=DB::table('question')->where('id',$id)->get();
//        return 'test';
        $jsonString=$request->input('result');
        $testId=$request->input('test_id');
        $correctAnswer=$request->input('correct_answer');
        $result=json_decode($jsonString,true);
        foreach ($result as $record){
            $id=$record['question_id'];
            $answer=$record['answer'];
            $columnArray=$this->getConvertAnswerArray();
            $column=$columnArray[$answer];
            $question=DB::table('question')->where('question_id',$id)->get()->first();
            $number=(int)$question->$column;
            $number=$number+1;
            DB::table('question')->where('question_id',$id)->update([$column=>$number]);
//            Log::debug($number);
        }
        if(Auth::check()) {
            $userId = Auth::user()->getAuthIdentifier();
            $data=[
                'user_id'=>$userId,
                'test_id'=>$testId,
                'right_answer'=>$correctAnswer
            ];
            $historyId=DB::table('history')->insertGetId($data);
            foreach ($result as $record){
                $idQuestion=$record['question_id'];
                $answer=$record['answer'];
                $data=[
                    'question_question_id'=>$idQuestion,
                    'history_history_id'=>$historyId,
                    'answer'=>$answer
                ];
                DB::table('detail_history')->insert($data);
            }
        }

        Log::debug(print_r ($data,true));
    }

    public function getConvertAnswerArray(){
        $array=[
            '1'=>'number_a',
            '2'=>'number_b',
            '3'=> 'number_c'
        ];
        return $array;
    }

    public function sendFeedback(Request $request){
        //Log::debug('Here');
        $name=$request->input('name');
        $email=$request->input('email');
        $content=$request->input('content');
        $testId=$request->input('test_id');
        $data=[
            'test_id'=>$testId,
            'name'=>$name,
            'email'=>$email,
            'content'=>$content
        ];
        DB::table('feedback')->insert($data);
    }
}
