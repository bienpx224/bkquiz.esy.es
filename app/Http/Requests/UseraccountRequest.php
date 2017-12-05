<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UseraccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    // public function boot()
    //   {
    //       // Password match validation
    //       Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {

    //         return Hash::check($value, current($parameters));

    //   });
    //   }

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'=>'required|min:3',
             'last_name'=>'required|min:3',
             'email'=>'required|email',
             'phone_number'=>'required|regex:/^[0-9-+]+$/|min:10|max:12',
             
             
              
            //
        ];
    }

    public function messages(){
      return [
               'first_name.required'=>'Lỗi! Bạn chưa nhập first_name',
               'first_name.min'=>'Lỗi! Tên ít nhất có 3 ký tự',
               'last_name.required'=>'Lỗi! Bạn chưa nhập last_name',
               'last_name.min'=>'Lỗi! Tên ít nhất có 3 ký tự',
               'email.required'=>'Lỗi! Bạn chưa nhập emai',
               'email.email'=>'Lỗi! Email không đúng định dạng. VD: abc@gmail.com',
               'phone_number.required'=>'Lỗi! Bạn chưa nhập SĐT',
               'phone_number.regex'=>'Lỗi! SĐT từ 10-12 chữ số.  VD :01656987382',
               'phone_number.min'=>'Lỗi! SĐT từ 10-12 chữ số. VD :01656987382 ',
               'phone_number.max'=>'Lỗi! SĐT từ 10-12 chữ số. VD :01656987382',
               

      ];
    }
}
