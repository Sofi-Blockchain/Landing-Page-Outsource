<?php

namespace App\Repositories\Music;

use App\Models\Music;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class MusicRepository implements MusicInterface
{
  public function datatable()
  {
   $musics = Music::get();
   return DataTables::of($musics)
      ->addIndexColumn()
      ->addColumn('name', function ($musics) {
        return '<p class="text-danger">' . 'VIE: ' . $musics->name . '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $musics->name_en . '</p>';
      })
      ->addColumn('author', function ($musics) {
        return '<p class="text-danger">' . 'VIE: ' . $musics->author . '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $musics->author_en . '</p>';
      })
      ->addColumn('image', function ($musics) {
        if (isset($musics->image)) {
          return '<img src="' . $musics->image . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        }
      })
      ->addColumn('image_dark', function ($musics) {
        if (isset($musics->image_dark)) {
          return '<img src="' .$musics->image_dark . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        }
      })
      ->addColumn('tracking', function ($musics) {
        return '<p class="text-success">' . 'ADD: ' . $musics->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $musics->updated_at->format('d/m/Y') . '</p>';
      })
      ->addColumn('action', function ($musics) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.music.form', ['id' => $musics->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.music.destroy', ['id' => $musics->id]) . '"   confirm-title="Xoá music" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->addColumn('status', function ($musics) {
        if ($musics->status == Music::ACTIVE_STATUS) {
          return 'Active';
        } elseif ($musics->status == Music::INACTIVE_STATUS) {
          return 'Inactive';
        } 
      })
      ->rawColumns(['name', 'author', 'image', 'image_dark','tracking', 'action'])
      ->make(true);
  }

  public function create($data)
  {
    $music = new Music();
    $music->name = $data['name'];
    $music->name_en = $data['name_en'];
    $music->author = $data['author'];
    $music->author_en = $data['author_en'];
    $music->status = $data['status'];
    if (isset($data['image'])) {
      $music->image = $data['image'];
    }
    if (isset($data['image_dark'])) {
      $music->image_dark = $data['image_dark'];
    }
    $music->save();
    if ($music) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký Music ' . $music->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký Music thất bại',
      ];
    }
  }

  public function update($data)
  {
    $music= Music::find($data['id']);
    $music->name = $data['name'];
    $music->name_en = $data['name_en'];
    $music->author = $data['author'];
    $music->author_en = $data['author_en'];
    $music->status = $data['status'];
    if (isset($data['image'])) {
      $music->image = $data['image'];
    }
    if (isset($data['image_dark'])) {
      $music->image_dark = $data['image_dark'];
    }
    $music->save();
    if ($music) {
      return [
        'success'   => 1,
        'message'   => 'Sửa Music ' . $music->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Sửa Music thất bại',
      ];
    }
  }

  public function delete($id)
  {
    $music= Music::find($id);
    $music->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa music ' . $music->name . ' thành công',
    ];
  }
}