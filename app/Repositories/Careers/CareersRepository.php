<?php

namespace App\Repositories\Careers;

use App\Models\Candidates;
use App\Models\Careers;
use Yajra\DataTables\Facades\DataTables;

class CareersRepository implements CareersInterface
{
  public function datatable()
  {
    $careers = Careers::get();

    return DataTables::of($careers)
      ->addIndexColumn()
      ->addColumn('name', function ($careers) {
        return '<p class="text-danger">' . 'VIE: ' . $careers->name . '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $careers->name_en . '</p>';
      })
      ->addColumn('location', function ($careers) {
        return $careers->getLocation($careers->location);
      })
      ->addColumn('department', function ($careers) {
        return $careers->getDepartment($careers->department);
      })
      ->addColumn('status', function ($partners) {
        if ($partners->status == Careers::ACTIVE_STATUS) {
          return 'Active';
        } elseif ($partners->status == Careers::INACTIVE_STATUS) {
          return 'Inactive';
        } else {
          return 'Hide';
        }
      })
      ->addColumn('tracking', function ($careers) {
        return '<p class="text-success">' . 'ADD: ' . $careers->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $careers->updated_at->format('d/m/Y') . '</p>';
      })
      ->addColumn('action', function ($careers) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.careers.form', ['id' => $careers->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.careers.destroy', ['id' => $careers->id]) . '"   confirm-title="Xoá careers" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['name', 'location', 'department', 'status', 'description', 'tracking', 'action'])
      ->make(true);
  }

  public function create($data)
  {
    $careers = new Careers();
    $careers->name = $data['name'];
    $careers->name_en = $data['name_en'];
    $careers->location = $data['location'];
    $careers->department = $data['department'];
    $careers->description = $data['description'];
    $careers->description_en = $data['description_en'];
    $careers->status = $data['status'];
    $careers->save();
    if ($careers) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký careers ' . $careers->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký careers thất bại',
      ];
    }
  }

  public function update($data)
  {
    $careers = Careers::find($data['id']);
    $careers->name = $data['name'];
    $careers->name_en = $data['name_en'];
    $careers->location = $data['location'];
    $careers->department = $data['department'];
    $careers->description = $data['description'];
    $careers->description_en = $data['description_en'];
    $careers->status = $data['status'];
    $careers->update();
    return [
      'success'   => 1,
      'message'   => 'Sửa thông tin Career ' . $careers->name . ' thành công',
    ];
  }

  public function delete($id)
  {
    $careers = Careers::find($id);
    $careers->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa careers ' . $careers->name . ' thành công',
    ];
  }

  public function createCandidate($data)
  {
    $candidate = new Candidates();
    $candidate->name = $data['name'];
    $candidate->email = $data['careerEmail'];
    $candidate->phone = $data['phone'];
    $candidate->gender = $data['gender'];
    $candidate->date = $data['date'];
    $file = $data->file('attachment');
    $ext = $file->getClientOriginalExtension();
    $filename = time() . '.' . $ext;
    $candidate->file = 'files/1/cv'.$filename;
    $path = $file->storeAs('files/1/cv', $filename);
    $candidate->save();
  }
}