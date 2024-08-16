<?php

namespace App\Repositories\Stream;

use App\Models\Stream;
use Yajra\DataTables\Facades\DataTables;

class StreamRepository implements StreamInterface
{
  public function datatable()
  {
    $streams = Stream::get();

    return DataTables::of($streams)
      ->addIndexColumn()
      ->addColumn('name', function ($streams) {
        return '<p class="text-danger">' . 'VIE: ' . $streams->name .  '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $streams->name_en . '</p>';
      })
      ->addColumn('image', function ($streams) {
        if (isset($streams->image)) {
          return '<img src="' . $streams->image . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        } else {
          return '<img src="' . $streams->logoUrl() . '"
                    style="height: 100px; width: 100px;  border-radius: 10%;">  ';
        }
      })
      ->addColumn('image_dark', function ($streams) {
        if (isset($streams->image_dark)) {
          return '<img src="' . $streams->image_dark . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        } else {
          return '<img src="' . $streams->logoUrl() . '"
                    style="height: 100px; width: 100px;  border-radius: 10%;">  ';
        }
      })
      ->addColumn('link', function ($streams) {
        // return '<p>' .'<a href=" '.$streams->link.' " target="_blank">'. $streams->link . '</a>'. '</p>';
        return '<a type="button" class="btn btn-success"
                data-bs-toggle="tooltip" title="Xem"
                data-bs-original-title="Xem" target="_blank" href=' . $streams->link . '>
                <i class="fa fa-eye"></i>
                </a>';
      })
      ->addColumn('tracking', function ($streams) {
        return '<p class="text-success">' . 'ADD: ' . $streams->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $streams->updated_at->format('d/m/Y') . '</p>';
      })
      ->addColumn('action', function ($streams) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.stream.form', ['id' => $streams->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.stream.destroy', ['id' => $streams->id]) . '"   confirm-title="Xoá Stream" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['name', 'image', 'image_dark', 'link', 'tracking', 'action'])
      ->make(true);
  }

  public function create($data)
  {
    $stream = new Stream();
    $stream->name = $data['name'];
    $stream->name_en = $data['name_en'];
    if (isset($data['image'])) {
      $stream->image = $data['image'];
    }
    if (isset($data['image_dark'])) {
      $stream->image_dark = $data['image_dark'];
    }
    $stream->link = $data['link'];
    $stream->save();
    if ($stream) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký Stream ' . $stream->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký Stream thất bại',
      ];
    }
  }

  public function update($data)
  {
    $stream = Stream::find($data['id']);
    $stream->name = $data['name'];
    $stream->name_en = $data['name_en'];
    if (isset($data['image'])) {
      $stream->image = $data['image'];
    }
    if (isset($data['image_dark'])) {
      $stream->image_dark = $data['image_dark'];
    }
    $stream->link = $data['link'];
    $stream->save();
    if ($stream) {
      return [
        'success'   => 1,
        'message'   => 'Sửa Stream ' . $stream->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Sửa Stream thất bại',
      ];
    }
  }

  public function delete($id)
  {
    $stream = Stream::find($id);
    $stream->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa Stream ' . $stream->name . ' thành công',
    ];
  }
}