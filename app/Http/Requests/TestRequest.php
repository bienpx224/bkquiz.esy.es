<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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

            'title'=>'required|unique:test,title|min:20|max:200',
            'image_url'=>'image|max:900',
        ];
    }

    public function messages(){
      return [
                'title.unique'=>'Test đã tồn tại',
               'title.required'=>'Bạn chưa nhập đề mục dữ liệu',
               'title.min'=>'Đề mục quá ngắn',
               'title.max'=>'Đề mục quá dài',
               'image_url.image'=>'Vui lòng chọn file ảnh'
      ];
    }
}
