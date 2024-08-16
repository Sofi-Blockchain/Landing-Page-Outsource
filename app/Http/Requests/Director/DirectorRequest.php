<?php

namespace App\Http\Requests\Director;

use Illuminate\Foundation\Http\FormRequest;

class DirectorRequest extends FormRequest
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
        $id = $this->id;
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'name_en' => 'required',
            'gender'  => 'required',
            'date_of_birth' => 'required',
            'avatar' => $id ? 'nullable' : 'required' ,
            'avatar_dark' => $id ? 'nullable' : 'required' ,
            'job_position'=>'required',
            'job_position_el'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' =>'Vui lòng nhập tên của bạn',
            'last_name.required' => 'Vui lòng nhập họ của bạn',
            'name_en.required' => 'Vui lòng nhập tên tiếng anh của bạn',
            'gender.required'=>'Vui lòng nhập giới tính của bạn',
            'date_of_birth.required'=>'Vui lòng nhập ngày sinh của bạn',
            'avatar.required'=> 'Vui lòng chọn ảnh đại diện',
            'avatar_dark.required'=> 'Vui lòng chọn ảnh đại diện dark mode',
            'job_position.required' =>'Vui lòng nhập công việc của bạn',
            'job_position_el.required' =>'Vui lòng nhập công việc ( tiếng Anh ) của bạn',
        ];
    }
}
