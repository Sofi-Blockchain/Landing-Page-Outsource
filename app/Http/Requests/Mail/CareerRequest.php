<?php

namespace App\Http\Requests\Mail;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'date'  => 'required',
            'attachment' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Vui lòng nhập tên',
            'email.required' =>'Vui lòng nhập email',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'gender.required' => 'Vui lòng nhập giới tính',
            'date.required'=>'Vui lòng chọn ngày ',
            'attachment.required'=>'Vui lòng chọn file CV của bạn',
        ];
    }
}
