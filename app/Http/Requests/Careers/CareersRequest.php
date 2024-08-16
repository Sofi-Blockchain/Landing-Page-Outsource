<?php

namespace App\Http\Requests\Careers;

use Illuminate\Foundation\Http\FormRequest;

class CareersRequest extends FormRequest
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
      'name_en' => 'required',
      'location' => 'required',
      'department' => 'required',
      'description' => 'required',
      'description_en' => 'required'
    ];
  }
  public function messages()
  {
    return [
      'name.required' => 'Vui lòng nhập tên của careers',
      'name_en.required' => 'Vui lòng nhập tên ( tiếng Anh ) của careers',
      'location.required' => 'Vui lòng nhập vị trí',
      'department.required' => 'Vui lòng chọn phòng ban',
      'description.required' => 'Vui lòng nhập mô tả',
      'description_en.required' => 'Vui lòng nhập mô tả ( tiếng Anh )',
    ];
  }
}