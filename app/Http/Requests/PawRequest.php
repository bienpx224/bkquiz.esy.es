<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PawRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
             'old_password' => 'required',
             'password'=>'required|min:4',
             'passwordAgain'=>'required|same:password',
        ];
    }
    public function messages(){
        return[
               'old_password.required'=>'Lỗi! bạn chưa nhập mật khẩu cũ ' ,
               'password.required'=>'Phải điền mật khẩu',
               'password.min'=>'Lỗi! Mật khẩu phải có ít nhất 4 ký tự',
               'passwordAgain.required'=>'Lỗi! Chưa nhập lại mật khẩu',
               'passwordAgain.same'=>'Lỗi! Mật khẩu nhập lại chưa đúng',
        ];
    }
}
