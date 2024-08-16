<?php

namespace App\Http\Requests\Stream;

use Illuminate\Foundation\Http\FormRequest;

class StreamRequest extends FormRequest
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
        $rules = [
             'name' => 'required',
             'name_en' => 'required',
             'link' => ['required','url'],
             'image' => $id ? 'nullable' : 'required' ,
             'image_dark' => $id ? 'nullable' : 'required' ,
         ];
         return $rules;
    }
    public function messages()
    {
        return [
            'name.required' =>'Vui lòng nhập tên',
            'name_en.required' =>'Vui lòng nhập tên tiếng anh',
            'link.required'=>'Vui lòng nhập đường dẫn',
            'link.url' => 'Đường dẫn bài viết không hợp lệ.',
            'link' => 'Đường dẫn bài viết không tồn tại hoặc không hợp lệ.',
            'image.required'=> 'Vui lòng chọn ảnh',
            'image_dark.required'=> 'Vui lòng chọn ảnh',
        ];
    }
}
