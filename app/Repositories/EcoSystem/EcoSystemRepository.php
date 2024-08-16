<?php

namespace App\Repositories\EcoSystem;

use App\Models\EcoSystem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class EcoSystemRepository implements EcoSystemInterface
{
  public function datatable()
  {
    $ecoSystems = EcoSystem::get();

    return DataTables::of($ecoSystems)
      ->addIndexColumn()
      ->addColumn('name', function ($ecoSystems) {
        return '<p class="text-danger">' . 'VIE: ' . $ecoSystems->name . '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $ecoSystems->name_en . '</p>';
      })
      ->addColumn('description', function ($ecoSystems) {
        return '<p class="text-danger">' . 'VIE: ' . $ecoSystems->description . '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $ecoSystems->description_en . '</p>';
      })
      ->addColumn('image', function ($ecoSystems) {
        if (isset($ecoSystems->image)) {
          return '<img src="' . $ecoSystems->image . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        }
      })
      ->addColumn('image_dark', function ($ecoSystems) {
        if (isset($ecoSystems->image_dark)) {
          return '<img src="' . $ecoSystems->image_dark . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        }
      })
      ->addColumn('tracking', function ($ecoSystems) {
        return '<p class="text-success">' . 'ADD: ' . $ecoSystems->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $ecoSystems->updated_at->format('d/m/Y') . '</p>';
      })
      ->editColumn('partner_id', function ($ecoSystems) {
        if (isset($ecoSystems->partner->name)) {
          return $ecoSystems->partner->name;
        }
      })
      ->editColumn('category', function ($ecoSystems) {
        return $ecoSystems->getCategory();
      })
      ->addColumn('action', function ($ecoSystems) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.ecosystem.form', ['id' => $ecoSystems->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.ecosystem.destroy', ['id' => $ecoSystems->id]) . '"   confirm-title="Xoá ecosystem" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['name', 'description', 'image', 'image_dark', 'partner_id', 'category', 'tracking', 'action'])
      ->make(true);
  }

  public function create($data)
  {
    $ecoSystem = new EcoSystem();
    $ecoSystem->name = $data['name'];
    $ecoSystem->name_en = $data['name_en'];
    $ecoSystem->description = $data['description'];
    $ecoSystem->description_en = $data['description_en'];
    $ecoSystem->category = $data['category'];
    if (isset($data['image']) && $data['category'] != EcoSystem::CATEGORY_4) {
      $ecoSystem->image = $data['image'];
    }
    if (isset($data['image_dark']) && $data['category'] != EcoSystem::CATEGORY_4) {
      $ecoSystem->image_dark = $data['image_dark'];
    }
    if (isset($data['partner']) && $data['category'] != EcoSystem::CATEGORY_4) {
      $ecoSystem->partner_id = $data['partner'];
    }
    $ecoSystem->save();
    if ($ecoSystem) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký EcoSystem ' . $ecoSystem->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký EcoSystem thất bại',
      ];
    }
  }

  public function update($data)
  {
    $ecoSystem = EcoSystem::find($data['id']);
    $ecoSystem->name = $data['name'];
    $ecoSystem->name_en = $data['name_en'];
    $ecoSystem->description = $data['description'];
    $ecoSystem->description_en = $data['description_en'];
    $ecoSystem->category = $data['category'];
    if (isset($data['image']) && $data['category'] != EcoSystem::CATEGORY_4) {
      $ecoSystem->image = $data['image'];
    } else {
      $ecoSystem->image = null;
    }
    if (isset($data['image_dark']) && $data['category'] != EcoSystem::CATEGORY_4) {
      $ecoSystem->image_dark = $data['image_dark'];
    } else {
      $ecoSystem->image_dark = null;
    }
    if (isset($data['partner']) && $data['category'] != EcoSystem::CATEGORY_4) {
      $ecoSystem->partner_id = $data['partner'];
    } else {
      $ecoSystem->partner_id = null;
    }
    $ecoSystem->save();
    if ($ecoSystem) {
      return [
        'success'   => 1,
        'message'   => 'Sửa EcoSystem ' . $ecoSystem->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Sửa EcoSystem thất bại',
      ];
    }
  }

  public function delete($id)
  {
    $ecoSystem = EcoSystem::find($id);
    $ecoSystem->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa director ' . $ecoSystem->name . ' thành công',
    ];
  }
}