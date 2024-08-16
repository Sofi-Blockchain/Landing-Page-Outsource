<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'name' => 'required',
            'short_name' => 'required',
            'name_en' => 'required',
            'status'  => 'required',
            'logo' => $id ? 'nullable' : 'required' ,
            'logo_dark' => $id ? 'nullable' : 'required' ,
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Vui lòng nhập tên của bạn',
            'short_name.required' => 'Vui lòng nhập short name của bạn',
            'name_en'=>'Vui lòng nhập tên tiếng anh của bạn',
            'status.required'=>'Vui lòng chọn status của bạn',
            'logo.required'=> 'Vui lòng chọn logo',
            'logo_dark.required'=>'Vui lòng nhập logo dark mode của bạn'
        ];
    }
}
