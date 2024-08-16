<?php

namespace App\Repositories\Candidate;

use App\Models\Candidates;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class CandidateRepository implements CandidateInterface
{
  public function datatable()
  {
    $candidates = Candidates::get();

    return DataTables::of($candidates)
      ->addIndexColumn()
      ->addColumn('date', function ($candidates) {
        return '<p class="text-success">' . $candidates->date . '</p>';
      })
      ->addColumn('action', function ($candidates) {
        return '<a class="btn btn-success"
        data-bs-toggle="tooltip" title="Xem"
        data-bs-original-title="Xem" target="_blank" href="'. $candidates->file .'">
        <i class="fa fa-eye"></i>
        </a>
        <a type="button" class="delete btn btn-danger btn-confirm"
        href="' . route('cms.candidate.destroy', ['id' => $candidates->id]) . '"   confirm-title="Xoá CV ứng viên" confirm-message="Bạn có thật sự muốn xoá?"> <i
            class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['date', 'action',])
      ->make(true);
  }

  public function delete($id)
  {

    $candidate = Candidates::find($id);
    $candidate->delete();
    if (File::exists('storage\files\1\CV\\', $candidate->file)) {
      File::delete('storage\files\1\CV\\' . $candidate->file);
    } else {
      dd('File does not exists.');
    }
    return [
      'success'   => 1,
      'message'   => 'Xóa ứng viên ' . $candidate->name . ' thành công',
    ];
  }
}