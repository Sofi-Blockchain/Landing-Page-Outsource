<?php

namespace App\Http\Requests\EcoSystem;

use Illuminate\Foundation\Http\FormRequest;

class EcoSystemRequest extends FormRequest
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
             'partner'  => 'required',
             'category' => 'required|in:1,2,3,4',
             'image' => $id ? 'nullable' : 'required' ,
             'image_dark' => $id ? 'nullable' : 'required' ,
         ];
         if($this->input('category') == 4){
             $rules['partner'] = 'nullable';
             $rules['image'] = 'nullable';
             $rules['image_dark'] = 'nullable';
         }
         return $rules;
    }
    public function messages()
    {
        return [
            'name.required' =>'Vui lòng nhập tên',
            'name_en.required' =>'Vui lòng nhập tên tiếng anh',
            'description.required' => 'Vui lòng nhập desciption',
            'description_en.required' => 'Vui lòng nhập desciption tiếng anh',
            'partner.required'=>'Vui lòng chọn partner',
            'category.required'=>'Vui lòng chọn category',
            'image.required'=> 'Vui lòng chọn ảnh',
            'image_dark.required'=> 'Vui lòng chọn ảnh',
        ];
    }
}
