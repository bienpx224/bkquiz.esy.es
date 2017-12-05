<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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

            'title'=>'required|min:20|max:100',
            'image_url'=>'image|max:100000',
        ];
    }

    public function messages(){
      return [
               'title.required'=>'Bạn chưa nhập đề mục dữ liệu',
               'title.min'=>'Đề mục quá ngắn',
               'title.max'=>'Đề mục quá dài',
               'image_url.image'=>'Please choose file is image(.img, .png, ....)',
               'image_url.max'=>'image is to big',
      ];
    }
}
