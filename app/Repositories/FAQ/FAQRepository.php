<?php

namespace App\Repositories\FAQ;

use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class FAQRepository implements FAQInterface
{
  public function datatable()
  {
    $faq = FAQ::get();

    return DataTables::of($faq)
      ->addIndexColumn()
      ->addColumn('question', function ($faq) {
        return '<p class="text-danger">' . 'VIE: ' . $faq->question . '</p>'.
          '<p class="text-primary">' . 'ENG: ' . $faq->question_en . '</p>';
      })
      ->addColumn('answer', function ($faq) {
        return '<p class="text-danger">' . 'VIE: ' . $faq->answer . '</p>' .
          '<p class="text-primary">' . 'ENG: ' . $faq->answer_en . '</p>';
      })
      ->addColumn('status', function ($faq) {
        if ($faq->status == FAQ::ACTIVE_STATUS) {
          return 'Active';
        } elseif ($faq->status == FAQ::INACTIVE_STATUS) {
          return 'Inactive';
        }
      })
      ->addColumn('tracking', function ($faq) {
        return '<p class="text-success">' . 'ADD: ' . $faq->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $faq->updated_at->format('d/m/Y') . '</p>';
      })
      ->addColumn('action', function ($faq) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.faq.form', ['id' => $faq->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.faq.destroy', ['id' => $faq->id]) . '"   confirm-title="Xoá faq" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['answer', 'question', 'tracking', 'action'])
      ->make(true);
  }

  public function create($data)
  {
    $faq = new FAQ();
    $faq->answer = $data['answer'];
    $faq->answer_en = $data['answer_en'];
    $faq->question = $data['question'];
    $faq->question_en = $data['question_en'];
    $faq->status = $data['status'];
    $faq->save();
    if ($faq) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký FAQ ' . $faq->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký FAQ thất bại',
      ];
    }
  }

  public function update($data)
  {
    $faq = FAQ::find($data['id']);
    $faq->answer = $data['answer'];
    $faq->answer_en = $data['answer_en'];
    $faq->question = $data['question'];
    $faq->question_en = $data['question_en'];
    $faq->status = $data['status'];
    $faq->save();
    if ($faq) {
      return [
        'success'   => 1,
        'message'   => 'Sửa FAQ ' . $faq->name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Sửa FAQ thất bại',
      ];
    }
  }

  public function delete($id)
  {
    $faq = FAQ::find($id);
    $faq->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa FAQ ' . $faq->name . ' thành công',
    ];
  }
}