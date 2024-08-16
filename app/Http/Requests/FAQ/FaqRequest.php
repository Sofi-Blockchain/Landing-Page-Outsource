<?php

namespace App\Http\Requests\FAQ;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'answer' => 'required',
            'answer_en' => 'required',
            'question' => 'required',
            'question_en'  => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'answer.required' =>'Vui lòng nhập câu trả lời',
            'answer_en.required' => 'Vui lòng nhập câu trả lời ( tiếng Anh )',
            'question.required' => 'Vui lòng nhập câu hỏi',
            'question_en.required'=>'Vui lòng nhập câu hỏi ( tiếng Anh )',
            'status.required'=>'Vui lòng chọn status',
        ];
    }
}
