<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\http\Request;
use Illuminate\Support\MessageBag;
use App\Cart;
use App\Cates;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function getLogin(){
        return view('login');
    }

    public function logout(){
      Auth::logout();
      	return redirect('login');
    }
    public function postLogin(LoginRequest $req){
        $login = [
        'username' => $req->txtUsername,
        'password' => $req->txtPassword
        ];
        if(Auth::attempt($login)){
          if(Auth::user()->is_active == 0){
            Auth::logout();
            $errors = new MessageBag(['errorLogin'=>'User has been block or not yet actived']);
            return redirect()->back()->withInput()->withErrors($errors);

          }else{
            return redirect('home');
          }
        }
        $errors = new MessageBag(['errorLogin'=>'User or Password are wrong ']);
        return redirect()->back()->withInput()->withErrors($errors);
      }
}
