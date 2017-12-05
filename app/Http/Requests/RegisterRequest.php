<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
                'txtUsername' => 'required|unique:user,username|max:45',
                'txtPassword' => 'required',
                'txtFirstname'=> 'required|max:100',
                'txtLastname'=> 'required|max:100',
                'txtEmail'=> 'required|email|unique:user,email|max:100',
                'txtPhonenumber'=> 'required|max:20',
        ];
    }
    public function messages(){
      return [
        'txtUsername.unique' => ' This username has exist, please try again',
        'txtUsername.max' => ' This username too long, please try again',
        'txtUsername.required' => ' Please enter Username',

        'txtPassword.required' => 'Please enter Password',

        'txtFirstname.required' => ' Please enter Firstname',
        'txtFirstname.max' => ' the first name is too long, pls try again',

        'txtLastname.required' => ' Please enter Lastname',
        'txtLastname.max' => ' the last name is too long, pls try again',

        'txtEmail.required' => ' Please enter Email',
        'txtEmail.email' => 'This is not email, please try again ',
        'txtEmail.max' => 'your email is too long, pls try again ',
          'txtEmail.unique' => 'your email is exitst, pls try again ',
        
        'txtPhonenumber.required' => ' Please enter Phone number',
      ];
    }
}
