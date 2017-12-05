<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contain s the "web" middleware group. Now create something great!
|
*/
Route::get('/fix', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');
});

Route::get('/',['as'=>'getHome','uses'=>'PageController@getHome']);
Route::get('error',function(){
  return view('error');
});
Route::get('home',['as'=>'getHome','uses'=>'PageController@trangchu']);
Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('login',['as'=>'login','uses'=>'Auth\LoginController@postLogin']);
Route::get('register',['as'=>'register','uses'=>'Auth\RegisterController@getRegister']);
Route::post('register',['as'=>'register','uses'=>'Auth\RegisterController@postRegister']);
Route::get('logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);

Route::get('contact',['as'=>'contact','uses'=>'Auth\ContactController@getContact']);

Route::get('AccountSettings',['as'=>'AccountSettings','uses'=>'User\UserController@getUser']);
Route::post('AccountSettings',['as'=>'AccountSettings','uses'=>'User\UserController@postUser']);

Route::get('changePassword',['as'=>'changePassword','uses'=>'User\UserController@getPasw']);
Route::post('changePassword',['as'=>'changePassword','uses'=>'User\UserController@postPasw']);

// Route::get('home','PageController@trangchu');
// Route::get('test/{id}/{TenKhongDau}.html','PageController@test');


Route::get('/createTest',['middleware' => 'createTest','as'=>'createTest','uses'=>'User\CreateTestController@getCreateTest']);
Route::post('createTest',['as'=>'createTest','uses'=>'User\CreateTestController@postCreateTest']);
Route::get('createQuestion/{title}',['middleware' => 'createTest','as'=>'createQuestion','uses'=>'User\CreateTestController@getCreateQuestion']);
Route::post('createQuestion/{title}',['as'=>'createQuestion','uses'=>'User\CreateTestController@postCreateQuestion']);

Route::group(['prefix'=>'admin','middleware' => 'admin'],function(){
     Route::group(['prefix'=>'test'],function(){
          Route::get('add',['as'=>'admin.test.getAdd','uses'=>'TestController@getAdd']);
          Route::post('add',['as'=>'admin.test.postAdd','uses'=>'TestController@postAdd']);
          Route::get('delete/{id}',['as'=>'admin.test.delete','uses'=>'TestController@getDelete']);
          Route::get('list',['as'=>'admin.test.list','uses'=>'TestController@getList']);
          Route::post('active',['as'=>'admin.test.active','uses'=>'TestController@active']);
          Route::get('addquestion/{title}',['as'=>'admin.test.addquestion','uses'=>'TestController@addquestion']);
          Route::post('addquestion',['as'=>'admin.test.postquestion','uses'=>'TestController@postquestion']);
          Route::get('edit',function(){
                 return view('admin.test.edit');
          });
					Route::any('{all?}',function(){
							return view('error');
					});
  });
	Route::group(['prefix'=>'config'],function(){
		Route::any('{all?}',function(){
				return view('error');
		});    // if you input wrong adress http, this page will go to home page

	});

     Route::group(['prefix'=>'question'],function(){
          Route::get('add/{id}',['as'=>'admin.question.getAdd','uses'=>'QuestionController@getAdd']);
          Route::post('add',['as'=>'admin.question.postAdd','uses'=>'QuestionController@postAdd']);
          Route::get('delete/{id}',['as'=>'admin.question.delete','uses'=>'QuestionController@getDelete']);
          Route::get('list',['as'=>'admin.question.list','uses'=>'QuestionController@getList']);
          Route::post('active',['as'=>'admin.question.active','uses'=>'QuestionController@active']);
          
					Route::get('edit/{id}',['as'=>'admin.question.edit','uses'=>'QuestionController@getEdit']);
					Route::any('{all?}',function(){
							return view('error');
					});
			});


     Route::group(['prefix'=>'user'],function(){
          Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
          Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
          Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
          Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
          Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
          Route::get('delete/{id}',['as'=>'admin.user.delete','uses'=>'UserController@getDelete']);
          Route::post('active',['as'=>'admin.user.active','uses'=>'UserController@active']);
					Route::any('{all?}',function(){
							return view('error');
					});
				});
});

Route::group(['prefix'=>'test'],function(){
    Route::get('dotest/{id}',['uses' => 'Test\DoTestController@getTestPage']);
    Route::post('save',['as'=> 'test.save','uses'=>'Test\DoTestController@save']);
    Route::get('form',function (){
       return view('test.testform');
    });
    Route::post('feedback',['as'=>'test.feedback','uses'=>'Test\DoTestController@sendFeedback']);
});


Route::get('editquyen/{id}',function($id){

  DB::table('user')->where('user_id',$id)->update(['authority'=>0]); return redirect()->route('admin.user.list');
})->name('editquyen');
//Route::any('{all?}','HomeController@getHome')->where('all', '(.*)');    // if you input wrong adress http, this page will go to home page
Route::get('thongke',function(){
  $data=DB::table('test')->join('topic','test.topic_id','=','topic.id')->select(DB::raw('count(*) as soluong,name'))->groupBy('name')->get();

 return view('admin.thongke',compact('data'));
})->name('thongke');

Route::get('thongketest/{id}',function($id){

   $data=DB::table('question')->where('test.topic_id', '=',$id)->join('test', function ($join) {
            $join->on('test.test_id', '=', 'question.test_id');
            })->select(DB::raw('count(*) as soluong,title'))->groupBy('title')->get();
   return view('admin.thongketest',compact('data'));
})->name('thongketest');

Route::get('list_history',['as'=>'list_history','uses'=>'User\UserController@getHistory']);
//Route::any('{all?}',['as'=>'all','middleware'=>'createTest','uses'=>'HomeController@getHome'])->where('all', '(.*)');    // if you input wrong adress http, this page will go to home page


Route::any('/env',function(){
  return view('error');
});
Route::any('{all?}',function(){
  return view('error');
});    // if you input wrong adress http, this page will go to home page
