<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:6',
            'gender'  => 'required',
            'date_of_birth' => 'required',
            'avatar' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' =>'Vui lòng nhập tên của bạn',
            'last_name.required' => 'Vui lòng nhập họ của bạn',
            'gender.required'=>'Vui lòng nhập giới tính của bạn',
            'date_of_birth.required'=>'Vui lòng nhập ngày sinh của bạn',
            'avatar.required'=> 'Vui lòng chọn ảnh đại diện',
            'email.required' =>'Vui lòng nhập email của bạn',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique:users' => 'Email đã tồn tại',
            'password.required' =>'Vui lòng nhập mật khẩu của bạn',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
        ];
    }
}
