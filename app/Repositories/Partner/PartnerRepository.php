<?php

namespace App\Repositories\Partner;

use App\Models\Partner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class PartnerRepository implements PartnerInterface
{
  public function datatable()
  {
    $partners = Partner::where('id', '<>', Partner::DEFAULT_ID)->get();

    return DataTables::of($partners)
      ->addIndexColumn()
      ->addColumn('name', function ($partners) {
        return '<p class="text-danger">' . 'VIE: ' . $partners->name . '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $partners->name_en . '</p>';
      })
      ->addColumn('logo', function ($partners) {
        if (isset($partners->logo)) {
          return '<img src="' . $partners->logo . '" style="height: 60px; width: 60px;  border-radius: 50%;"> ';
        } else {
          return '<img src="' . $partners->logoUrl() . '" style="height: 60px; width: 60px;  border-radius: 50%;">';
        }
      })
      ->addColumn('logo_dark', function ($partners) {
        if (isset($partners->logo_dark)) {
          return '<img src="' . $partners->logo_dark . '" style="height: 60px; width: 60px;  border-radius: 50%;"> ';
        } else {
          return '<img src="' . $partners->logoUrl() . '" style="height: 60px; width: 60px;  border-radius: 50%;">';
        }
      })
      ->addColumn('status', function ($partners) {
        if ($partners->status == Partner::ACTIVE_STATUS) {
          return 'Active';
        } elseif ($partners->status == Partner::INACTIVE_STATUS) {
          return 'Inactive';
        } else {
          return 'Pin to web';
        }
      })
      ->addColumn('tracking', function ($partners) {
        return '<p class="text-success">' . 'ADD: ' . $partners->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $partners->updated_at->format('d/m/Y') . '</p>';
      })
      ->addColumn('action', function ($partners) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.partner.form', ['id' => $partners->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.partner.destroy', ['id' => $partners->id]) . '"   confirm-title="Xoá partner" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['name', 'logo', 'logo_dark', 'status', 'tracking', 'action'])
      ->make(true);
  }

  public function create($data)
  {
    $partner = new Partner();
    $partner->name = $data['name'];
    $partner->name_en = $data['name_en'];
    $partner->short_name = $data['short_name'];
    $partner->status = $data['status'];
    $partner->logo = $data['logo'];
    $partner->logo_dark = $data['logo_dark'];
    $partner->save();
    if ($partner) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký partner ' . $partner->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký partner thất bại',
      ];
    }
  }

  public function update($data)
  {
    $partner = Partner::find($data['id']);
    if (isset($data['logo'])) {
      $partner->logo = $data['logo'];
    }
    if (isset($data['logo_dark'])) {
      $partner->logo_dark = $data['logo_dark'];
    }
    $partner->name = $data['name'];
    $partner->name_en = $data['name_en'];
    $partner->short_name = $data['short_name'];
    $partner->status = $data['status'];
    $partner->update();
    return [
      'success'   => 1,
      'message'   => 'Sửa thông tin partner ' . $partner->name . ' thành công',
    ];
  }

  public function delete($id)
  {
    $partner = Partner::find($id);
    $partner->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa director ' . $partner->name . ' thành công',
    ];
  }
}