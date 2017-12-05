<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
           'answer_a'=>'required|max:45',
            'answer_b'=>'required|max:45',
            'answer_c'=>'required|max:45',
            'question'=>'max:200',


        ];
    }

    public function messages(){
      return [
        'answer_a.required'=>'Pls enter answer_a for this question',
        'answer_b.required'=>'Pls enter answer_b for this question',
        'answer_c.required'=>'Pls enter answer_c for this question',
        'question.max'=>'your detail of question is too long, try again',
        'answer_a.max'=>'your content of answer is too long, try again',
        'answer_b.max'=>'your content of answer is too long, try again',
        'answer_c.max'=>'your content of answer is too long, try again',
      ];
    }
}
