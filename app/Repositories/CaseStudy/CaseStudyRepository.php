<?php

namespace App\Repositories\CaseStudy;

use App\Models\CaseStudy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class CaseStudyRepository implements CaseStudyInterface
{
    public function datatable()
    {
        $caseStudy = CaseStudy::get();

        return DataTables::of($caseStudy)
          ->addIndexColumn()
          ->addColumn('name', function ($caseStudy) {
            return '<p class="text-danger">' . 'VIE: ' . $caseStudy->name . '</p>' .
                   '<p class="text-primary">' . 'ENG: ' . $caseStudy->name_en . '</p>';
          })
          ->addColumn('description', function ($caseStudy) {
            return '<p class="text-danger">' . 'VIE: ' . $caseStudy->description . '</p>' .
                   '<p class="text-primary">' . 'ENG: ' . $caseStudy->description_en . '</p>';
          })
          ->addColumn('content', function ($caseStudy) {
            if (isset($caseStudy->image) && isset($caseStudy->image_dark)) {
              return '<img src="' . $caseStudy->image . '" style="height: 100px; width: 100px;  border-radius: 10%; margin-bottom:10px;"> '.
                      '<img src="' . $caseStudy->image_dark . '" style="height: 100px; width: 100px;  border-radius: 10%;"> ';
            }
            elseif(isset($caseStudy->video) && isset($caseStudy->video_dark)){
              return '<video width="160" height="120" controls><source src="' . $caseStudy->video . '"></video>'.
                     '<video width="160" height="120" controls><source src="' . $caseStudy->video_dark . '"></video>';
            }
            elseif(isset($caseStudy->yt_embed_url) && isset($caseStudy->yt_embed_url_dark)){
              return '<a type="button" class="btn btn-success"
                        data-bs-toggle="tooltip" title="Xem"
                        data-bs-original-title="Xem" target="_blank" href=' . $caseStudy->yt_embed_url . ' style="margin-right: 10px;">
                        <i class="fa fa-eye"></i>
                        </a>'.
                      '<a type="button" class="btn btn-success"
                      data-bs-toggle="tooltip" title="Xem"
                      data-bs-original-title="Xem" target="_blank" href=' . $caseStudy->yt_embed_url_dark . '>
                      <i class="fa fa-eye"></i>
                      </a>';
            }
          })
          ->addColumn('tracking', function ($caseStudy) {
            return '<p class="text-success">' . 'ADD: ' . $caseStudy->created_at->format('d/m/Y') . '</p>' .
              '<p class="text-warning">' . 'UPD: ' . $caseStudy->updated_at->format('d/m/Y') . '</p>';
          })
          ->addColumn('status', function ($partners) {
            if ($partners->status == CaseStudy::ACTIVE_STATUS) {
              return 'Active';
            } elseif ($partners->status == CaseStudy::INACTIVE_STATUS) {
              return 'Inactive';
            }
          })
          ->addColumn('action', function ($caseStudy) {
            return '<a type="button" class="edit btn btn-primary"
                        href="' . route('cms.casestudy.form', ['id' => $caseStudy->id]) . '"> <i
                        class="nav-icon fas fa-edit"></i></a>
                        <a type="button" class="delete btn btn-danger btn-confirm"
                        href="' . route('cms.casestudy.destroy', ['id' => $caseStudy->id]) . '"   confirm-title="Xoá CaseStudy" confirm-message="Bạn có thật sự muốn xoá?"> <i
                            class="nav-icon fas fa-trash"></i></a>';
          })
          ->rawColumns(['name', 'description', 'content','status','tracking', 'action'])
          ->make(true);
    }

    public function create($data)
    {
       $caseStudy = new CaseStudy();
       $caseStudy->name = $data['name'];
       $caseStudy->name_en = $data['name_en'];
       $caseStudy->description = $data['description'];
       $caseStudy->description_en = $data['description_en'];
       $caseStudy->status = $data['status'];
       if(isset($data['image']) && isset($data['image_dark']) && $data['status_content'] == 1){
        $caseStudy->image = $data['image'];
        $caseStudy->image_dark = $data['image_dark'];
       }
       if(isset($data['video']) && isset($data['video_dark']) && $data['status_content'] == 2){
        $caseStudy->video = $data['video'];
        $caseStudy->video_dark = $data['video_dark'];
       }
       if(isset($data['yt_url']) && isset($data['yt_url_dark']) && $data['status_content'] == 3){
        $caseStudy->yt_embed_url = $data['yt_url'];
        $caseStudy->yt_embed_url_dark = $data['yt_url_dark'];
       }
       $caseStudy->save();
        if ($caseStudy) {
        return [
            'success'   => 1,
            'message'   => 'Đăng ký CaseStudy ' . $caseStudy->name . ' thành công!',
        ];
        } else {
        return [
            'success'   => 0,
            'message'   => 'Đăng ký CaseStudy thất bại',
        ];
        }
    }

    public function update($data)
    {
       $caseStudy = CaseStudy::find($data['id']);
       $caseStudy->name = $data['name'];
       $caseStudy->name_en = $data['name_en'];
       $caseStudy->description = $data['description'];
       $caseStudy->description_en = $data['description_en'];
       $caseStudy->status = $data['status'];
       if(isset($data['image']) && isset($data['image_dark']) && $data['status_content'] == 1){
        $caseStudy->image = $data['image'];
        $caseStudy->image_dark = $data['image_dark'];
       }else {
        $caseStudy->video = null;
        $caseStudy->video_dark = null;
        $caseStudy->yt_embed_url = null;
        $caseStudy->yt_embed_url_dark = null;
       }
       if(isset($data['video']) && isset($data['video_dark']) && $data['status_content'] == 2){
        $caseStudy->video = $data['video'];
        $caseStudy->video_dark = $data['video_dark'];
       }else{
        $caseStudy->image = null;
        $caseStudy->image_dark = null;
        $caseStudy->yt_embed_url = null;
        $caseStudy->yt_embed_url_dark = null;
       }
       if(isset($data['yt_url']) && isset($data['yt_url_dark']) && $data['status_content'] == 3){
        $caseStudy->yt_embed_url = $data['yt_url'];
        $caseStudy->yt_embed_url_dark = $data['yt_url_dark'];
       }else{
        $caseStudy->image = null;
        $caseStudy->image_dark = null;
        $caseStudy->video = null;
        $caseStudy->video = null;
       }
       $caseStudy->save();
       if ($caseStudy) {
        return [
          'success'   => 1,
          'message'   => 'Sửa CaseStudy ' . $caseStudy->name . ' thành công!',
        ];
      } else {
        return [
          'success'   => 0,
          'message'   => 'Sửa CaseStudy thất bại',
        ];
      }
    }

    public function delete($id)
    {
        $caseStudy = CaseStudy::find($id);
        $caseStudy->delete();
        return [
          'success'   => 1,
          'message'   => 'Xóa CaseStudy ' . $caseStudy->name . ' thành công',
        ];
    }
}