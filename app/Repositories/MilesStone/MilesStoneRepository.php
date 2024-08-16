<?php

namespace App\Repositories\MilesStone;

use App\Models\MilesStone;
use Yajra\DataTables\Facades\DataTables;

class MilesStoneRepository implements MilesStoneInterface
{
    public function datatable()
    {
        $milesStones = MilesStone::get();

        return DataTables::of($milesStones)
            ->addIndexColumn()
            ->addColumn('description', function ($milesStones) {
              return '<p class="text-danger">' . 'VIE: ' . $milesStones->description . '</p>' .
                '<p class="text-primary">' . 'ENG: ' . $milesStones->description_en . '</p>';
            })
            ->addColumn('tracking', function ($milesStones) {
                return '<p class="text-success">' . 'ADD: ' . $milesStones->created_at->format('d/m/Y') . '</p>' . 
                       '<p class="text-warning">' . 'UPD: ' .$milesStones->updated_at->format('d/m/Y') . '</p>';
            })
            ->addColumn('action', function ($milesStones) {
                return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.milesstones.form', ['id' => $milesStones->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.milesstones.destroy', ['id' => $milesStones->id]) . '"confirm-title="Xoá milesstone" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
            })
            ->rawColumns(['description','tracking', 'action'])
            ->make(true);
    }

    public function create($data)
    {
        $milesStone = new MilesStone();
        $milesStone->description = $data['description'];
        $milesStone->description_en = $data['description_en'];
        $milesStone->year = $data['year'];
        $milesStone->save();
    if ($milesStone) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký MilesStone ' . $milesStone->id . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký MilesStone thất bại',
      ];
    }
    }

    public function update($data)
    {
        $milesStone = MilesStone::find($data['id']);
        $milesStone->description = $data['description'];
        $milesStone->description_en = $data['description_en'];
        $milesStone->year = $data['year'];
        $milesStone->update();
    return [
      'success'   => 1,
      'message'   => 'Sửa thông tin MilesStone ' . $milesStone->id . ' thành công',
    ];
    }

    public function delete($id)
    {
        $milesStone = MilesStone::find($id);
        $milesStone->delete();
        return [
          'success'   => 1,
          'message'   => 'Xóa MilesStone ' . $milesStone->id . ' thành công',
        ];
    }
}