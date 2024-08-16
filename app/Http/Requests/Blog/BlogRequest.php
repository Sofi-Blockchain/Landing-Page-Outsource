<?php

namespace App\Http\Requests\Blog;

use App\Rules\ValidUrl;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
             'description' => 'required',
             'description_en' => 'required',
             'link' => ['required','url',new ValidUrl],
             'link_en' => ['required','url',new ValidUrl],
             'category' => 'required|in:1,2,3,4',
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
            'description.required' => 'Vui lòng nhập desciption',
            'description_en.required' => 'Vui lòng nhập desciption tiếng anh',
            'link.required'=>'Vui lòng nhập đường dẫn',
            'link.url' => 'Đường dẫn bài viết không hợp lệ.',
            'link' => 'Đường dẫn bài viết không tồn tại hoặc không hợp lệ.',
            'link_en.required'=>'Vui lòng nhập đường dẫn',
            'link_en.url' => 'Đường dẫn bài viết không hợp lệ.',
            'link_en' => 'Đường dẫn bài viết không tồn tại hoặc không hợp lệ.',
            'category.required'=>'Vui lòng chọn category',
            'image.required'=> 'Vui lòng chọn ảnh',
            'image_dark.required'=> 'Vui lòng chọn ảnh',
        ];
    }
}
