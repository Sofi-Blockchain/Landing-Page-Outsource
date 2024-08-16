<?php

namespace App\Repositories\Blog;

use App\Models\Blog;
use Yajra\DataTables\Facades\DataTables;

class BlogRepository implements BlogInterface
{
  public function datatable()
  {
    $blogs = Blog::get();

    return DataTables::of($blogs)
      ->addIndexColumn()
      ->addColumn('name', function ($blogs) {
        return '<p class="text-danger">' . 'VIE: ' . $blogs->name .  '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $blogs->name_en . '</p>';
      })
      ->addColumn('image', function ($blogs) {
        if (isset($blogs->image)) {
          return '<img src="' . $blogs->image . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        } else {
          return '<img src="' . $blogs->logoUrl() . '"
                    style="height: 100px; width: 100px;  border-radius: 10%;">  ';
        }
      })
      ->addColumn('image_dark', function ($blogs) {
        if (isset($blogs->avatar_dark)) {
          return '<img src="' . $blogs->avatar_dark . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
        } else {
          return '<img src="' . $blogs->logoUrl() . '"
                    style="height: 100px; width: 100px;  border-radius: 10%;">  ';
        }
      })
      ->addColumn('link', function ($blogs) {
        return '<p class="text-danger">' . 'Bài viết tiếng Việt: ' . '<a href=" ' . $blogs->link . ' " target="_blank">' . $blogs->link . '</a>' . '</p>' .
          '<p class="text-success">' . 'Bài viết tiếng Anh: ' . '<a href=" ' . $blogs->link . ' " target="_blank">' . $blogs->link_en . '</a>' . '</p>';
      })
      ->editColumn('category', function ($blogs) {
        return $blogs->getCategory($blogs->category);
      })
      ->addColumn('tracking', function ($blogs) {
        return '<p class="text-success">' . 'ADD: ' . $blogs->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $blogs->updated_at->format('d/m/Y') . '</p>';
      })
      ->addColumn('action', function ($blogs) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.blog.form', ['id' => $blogs->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.blog.destroy', ['id' => $blogs->id]) . '"   confirm-title="Xoá blog" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['name', 'image', 'image_dark', 'link', 'category', 'tracking', 'action'])
      ->make(true);
  }

  public function create($data)
  {
    $blog = new Blog();
    $blog->name = $data['name'];
    $blog->name_en = $data['name_en'];
    $blog->description = $data['description'];
    $blog->description_en = $data['description_en'];
    if (isset($data['image'])) {
      $blog->image = $data['image'];
    }
    if (isset($data['image_dark'])) {
      $blog->image_dark = $data['image_dark'];
    }
    $blog->category = $data['category'];
    $blog->link = $data['link'];
    $blog->link_en = $data['link_en'];
    $blog->save();
    if ($blog) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký Blog ' . $blog->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký Blog thất bại',
      ];
    }
  }

  public function update($data)
  {
    $blog = Blog::find($data['id']);
    $blog->name = $data['name'];
    $blog->name_en = $data['name_en'];
    $blog->description = $data['description'];
    $blog->description_en = $data['description_en'];
    $blog->category = $data['category'];
    $blog->link = $data['link'];
    $blog->link_en = $data['link_en'];
    if (isset($data['image'])) {
      $blog->image = $data['image'];
    } else {
      $blog->image = null;
    }
    if (isset($data['image_dark'])) {
      $blog->image_dark = $data['image_dark'];
    } else {
      $blog->image_dark = null;
    }
    $blog->save();
    if ($blog) {
      return [
        'success'   => 1,
        'message'   => 'Sửa Blog ' . $blog->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Sửa Blog thất bại',
      ];
    }
  }

  public function delete($id)
  {
    $blog = Blog::find($id);
    $blog->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa blog ' . $blog->name . ' thành công',
    ];
  }
}