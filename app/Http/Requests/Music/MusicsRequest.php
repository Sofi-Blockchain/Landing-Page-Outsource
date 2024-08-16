<?php

namespace App\Http\Requests\Music;

use Illuminate\Foundation\Http\FormRequest;

class MusicsRequest extends FormRequest
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
            'name_en' => 'required',
            'author' => 'required',
            'author_en' => 'required',
            'image' => $id ? 'nullable' : 'required' ,
            'image_dark' => $id ? 'nullable' : 'required' ,
            'status'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Vui lòng nhập tên bài hát',
            'name_en.required' =>'Vui lòng nhập tên( tiếng anh ) bài hát',
            'author.required' => 'Vui lòng nhập tác giả',
            'author_en.required' => 'Vui lòng nhập tên ( tiếng anh ) tác giả',
            'status.required' => 'Vui lòng chọn trạng thái',
            'image.required'=> 'Vui lòng chọn ảnh',
            'image_dark.required'=>'Vui lòng nhập ảnh dark mode '
        ];
    }
}
