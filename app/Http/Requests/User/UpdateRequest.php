<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
        $userId = $this->route('user');
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email',Rule::unique('users')->ignore($this->id)],
            'gender'  => 'required',
            'date_of_birth' => 'required',
            'current_password' => [
                'nullable', 
                Rule::requiredIf(function () {
                    return !empty($this->input('new_password'));
                }),
            ],
            'new_password' => [
                'nullable', 
                Rule::requiredIf(function () {
                    return !empty($this->input('new_password_confirmation'));
                }),
                Rule::requiredIf(function () {
                    return !empty($this->input('current_password'));
                }),
                'min:6',
                'confirmed'
            ],
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!empty($this->input('current_password'))) {
                if (!Hash::check($this->input('current_password'), $this->user()->password)) {
                    $validator->errors()->add('current_password', 'Mật khẩu hiện tại không đúng.');
                }
            }
        });
    }
    public function messages()
    {
        return [
            'first_name.required' =>'Vui lòng nhập tên của bạn',
            'last_name.required' => 'Vui lòng nhập họ của bạn',
            'gender.required'=>'Vui lòng nhập giới tính của bạn',
            'date_of_birth.required'=>'Vui lòng nhập ngày sinh của bạn',
            'email.required' =>'Vui lòng nhập email của bạn',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique:users' => 'Email đã tồn tại',
            'new_password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'new_password.confirmed' => 'Vui lòng xác nhận lại mật khẩu mới',
            'current_password.required' => 'Vui lòng nhập mật khẩu',
            'new_password.required' => 'Vui lòng nhập mật khẩu mới'
        ];
    }
}
