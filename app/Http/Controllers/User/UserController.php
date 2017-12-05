<?php
 
namespace App\Http\Controllers\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\Http\Requests\UseraccountRequest;
use App\Http\Requests\PawRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    
   public function getUser(){
      $user=Auth::user();
   	return view('user.block.user');

   }
   public function postUser(UseraccountRequest $request){
      
      $user = Auth::user();
      $user->first_name = $request->first_name;
      $user->last_name = $request->last_name;
      $user->email = $request->email;
      $user->phone_number=$request->phone_number;

      $user->save();
      return redirect('AccountSettings')->with('thongbao','Bạn đã sửa thành công');
   }

   public function getPasw(){
      return view('user.block.pwUser');
   }

    public function getHistory(){
        $user = Auth::user();
        $data = DB::table('history')
            ->join('test','history.test_id','=','test.test_id')
            ->where('history.user_id','=',$user->user_id)
            ->get();
        ;
        return view('page.listhistory',['data'=>$data]);
    }

   public function postPasw(PawRequest $req){
      $user = Auth::user();
      $old_password = $req->old_password;
       if (Hash::check($old_password, $user->password))  
      {
         $user->password = Hash::make($req->password);
         $user->save();
         return redirect('changePassword')->with('thongbao','Bạn đã sửa thành công');
      }else
         {  $errors = new MessageBag(['errorLogin'=>'Mật khẩu sai']);
            return redirect('changePassword')->withErrors($errors);
         }    
   }


}