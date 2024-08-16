<?php

namespace App\Http\Requests\MilesStone;

use Illuminate\Foundation\Http\FormRequest;

class MilesStoneRequest extends FormRequest
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
            'description' => 'required',
            'description_en' => 'required',
            'year' => 'required|date_format:Y',
        ];
    }
    public function messages()
    {
        return [
            'description.required' =>'Vui lòng nhập mô tả',
            'description_en.required' =>'Vui lòng nhập mô tả ( tiếng Anh )',
            'year.required' => 'Vui lòng nhập năm',
            'year.date_format' => 'Năm phải có định dạng YYYY.',
        ];
    }
}
