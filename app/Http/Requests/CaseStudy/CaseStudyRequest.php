<?php

namespace App\Http\Requests\CaseStudy;

use Illuminate\Foundation\Http\FormRequest;

class CaseStudyRequest extends FormRequest
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
            'image' =>  $id ? 'nullable' : 'required',
            'image_dark' =>  $id ? 'nullable' : 'required',
            'video' =>  $id ? 'nullable' : 'required',
            'video_dark' =>  $id ? 'nullable' : 'required',
            'yt_url' =>  $id ? 'nullable' : 'required',
            'yt_url_dark' =>  $id ? 'nullable' : 'required',
            'status'=>'required',
            'status_content' => 'required',
        ];
        if($this->input('status_content') == 1){
            $rules['video'] = 'nullable';
            $rules['yt_url'] = 'nullable';
            $rules['video_dark'] = 'nullable';
            $rules['yt_url_dark'] = 'nullable';
        }
        if($this->input('status_content') == 2){
            $rules['image'] = 'nullable';
            $rules['yt_url'] = 'nullable';
            $rules['image_dark'] = 'nullable';
            $rules['yt_url_dark'] = 'nullable';
        }
        if($this->input('status_content') == 3){
            $rules['video'] = 'nullable';
            $rules['image'] = 'nullable';
            $rules['video_dark'] = 'nullable';
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
            'image.required'=> 'Vui lòng chọn ảnh',
            'image_dark.required'=> 'Vui lòng chọn ảnh',
            'video.required'=> 'Vui lòng chọn video',
            'video_dark.required'=> 'Vui lòng chọn video',
            'yt_url.required'=> 'Vui lòng nhập đường dẫn',
            'yt_url_dark.required'=> 'Vui lòng nhập đường dẫn',
            'status.required'=> 'Vui lòng chọn status',
            'status_content.required'=> 'Vui lòng chọn status',
        ];
    }
}
