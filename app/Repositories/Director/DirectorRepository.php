<?php

namespace App\Repositories\Director;

use App\Models\Director;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class DirectorRepository implements DirectorInterface
{
    public function datatable()
    {
        $directors = Director::where('id' ,'<>', Director::DEFAULT_ID)->get();

        return DataTables::of($directors)
            ->addIndexColumn()
            ->addColumn('name', function ($directors) {
                return '<p class="text-danger">' . 'VIE: ' . $directors->first_name . ' ' . $directors->last_name. '</p>' . 
                       '<p class="text-primary">' . 'ENG: ' .$directors->name_en. '</p>';
            })
            ->addColumn('avt', function ($directors) {
                if (isset($directors->avatar)) {
                    return '<img src="' . $directors->avatar . '"
                    style="height: 20px; width: 20px;  border-radius: 50%;">  ' . $directors->first_name . ' ' . $directors->last_name;
                } else {
                    return '<img src="' . $directors->avatarUrl() . '"
                    style="height: 20px; width: 20px;  border-radius: 50%;">  ' . $directors->first_name . ' ' . $directors->last_name;
                }
            })
            ->addColumn('avt', function ($directors) {
                if (isset($directors->avatar)) {
                    return '<img src="' . $directors->avatar . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
                }else {
                    return '<img src="' . $directors->avatarUrl() . '"
                    style="height: 100px; width: 100px;  border-radius: 10%;">  ';
                }
            })
            ->addColumn('avt_dark', function ($directors) {
                if (isset($directors->avatar_dark)) {
                    return '<img src="' . $directors->avatar_dark . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
                }else {
                    return '<img src="' . $directors->avatarUrl() . '"
                    style="height: 100px; width: 100px;  border-radius: 10%;">  ';
                }
            })
            ->addColumn('job_position', function ($directors) {
                return '<p class="text-danger">' . 'VIE: ' . $directors->job_possition. '</p>' . 
                       '<p class="text-primary">' . 'ENG: ' .$directors->job_possition_english. '</p>';
            })
            ->addColumn('gender', function ($directors) {
                if ($directors->gender == Director::GENDER_MALE){
                    return 'Nam';
                }elseif($directors->gender == Director::GENDER_FEMALE){
                    return 'Nữ';
                }else{
                    return 'Khác';
                }
            })
            ->addColumn('tracking', function ($directors) {
                return '<p class="text-success">' . 'ADD: ' . $directors->created_at->format('d/m/Y') . '</p>' . 
                       '<p class="text-warning">' . 'UPD: ' .$directors->updated_at->format('d/m/Y') . '</p>';
            })
            ->addColumn('action', function ($directors) {
                return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.director.form', ['id' => $directors->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.director.destroy', ['id' => $directors->id]) . '"   confirm-title="Xoá director" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
            })
            ->rawColumns(['name', 'avt', 'avt_dark', 'job_position', 'gender', 'tracking', 'action'])
            ->make(true);
    }

    public function create($data)
    {
        $director = new Director();
        $director->first_name = $data['first_name'];
        $director->last_name = $data['last_name'];
        $director->name_en = $data['name_en'];
        $director->job_possition = $data['job_position'];
        $director->job_possition_english = $data['job_position_el'];
        $director->gender = $data['gender'];
        $director->date_of_birth = $data['date_of_birth'];
        $director->avatar = $data['avatar'];
        $director->avatar_dark = $data['avatar_dark'];
        $director->save();
        if($director){
            return [
                'success'   => 1,
                'message'   => 'Đăng ký director '.$director->first_name.' '.$director->last_name.' thành công!',
            ];
        }
        else{
            return [
                'success'   => 0,
                'message'   => 'Đăng ký director thất bại',
            ];
        }
    }

    public function update($data)
    {
        $director = Director::find($data['id']);
        if(isset($data['avatar'])){
            $director->avatar = $data['avatar'];
        }
        if(isset($data['avatar_dark'])){
            $director->avatar_dark = $data['avatar_dark'];
        }
        $director->first_name = $data['first_name'];
        $director->last_name = $data['last_name'];
        $director->name_en = $data['name_en'];
        $director->job_possition = $data['job_position'];
        $director->job_possition_english = $data['job_position_el'];
        $director->date_of_birth = $data['date_of_birth'];
        $director->gender = $data['gender'];
        $director->update();
        return [
            'success'   => 1,
            'message'   => 'Sửa thông tin director '.$director->first_name.' '.$director->last_name.' thành công',
        ];
    }

    public function delete($id)
    {
        $director = Director::find($id);
        $director->delete();
        return [
            'success'   => 1,
            'message'   => 'Xóa director '.$director->first_name.' '.$director->last_name.' thành công',
        ];
    }
}