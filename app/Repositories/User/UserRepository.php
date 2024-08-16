<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class UserRepository implements UserInterface
{
  /**
   * Login verify
   *
   * @return array
   */
  public function loginVerify($data)
  {
    if (Auth::attempt($data)) {
      return [
        'success'   => 1,
        'message'   => 'Đăng nhập thành công!',
        'data'      => Auth::user()
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Tài khoản hoặc mật khẩu không đúng!',
      ];
    }
  }


  /**
   * List of users
   * @return Datatables
   */
  public function datatable()
  {
    $users = User::where('id', '<>', User::DEFAULT_ID);

    return DataTables::of($users)
      ->addIndexColumn()
      ->addColumn('avt', function ($user) {
        return '<img src="' . $user->avatarUrl() . '"
                    style="height: 50px; width: 50px;  border-radius: 50%; margin-right: 25px">  ' . $user->first_name . ' ' . $user->last_name;
      })
      ->addColumn('gender', function ($user) {
        if ($user->gender == User::GENDER_MALE) {
          return 'Nam';
        } elseif ($user->gender == User::GENDER_FEMALE) {
          return 'Nữ';
        } else {
          return 'Khác';
        }
      })
      ->addColumn('tracking', function ($user) {
        return '<p class="text-success">' . 'ADD: ' . $user->created_at->format('d/m/Y') . '</p>' .
          '<p class="text-warning">' . 'UPD: ' . $user->updated_at->format('d/m/Y') . '</p>';
      })
      ->addColumn('action', function ($user) {
        return '<a type="button" class="edit btn btn-primary"
                    href="' . route('cms.user.form', ['id' => $user->id]) . '"> <i
                    class="nav-icon fas fa-edit"></i></a>
                    <a type="button" class="delete btn btn-danger btn-confirm"
                    href="' . route('cms.user.destroy', ['id' => $user->id]) . '"   confirm-title="Xoá quản trị viên" confirm-message="Bạn có thật sự muốn xoá?"> <i
                        class="nav-icon fas fa-trash"></i></a>';
      })
      ->rawColumns(['avt', 'tracking', 'action'])
      ->make(true);
  }

  public function storeProcess($data)
  {
  }

  public function create($data)
  {
    $user = new User();
    $user->first_name = $data['first_name'];
    $user->last_name = $data['last_name'];
    $user->email = $data['email'];
    $user->password = $data['password'];
    $user->gender = $data['gender'];
    $user->date_of_birth = $data['date_of_birth'];
    $user->avatar = $data['avatar'];
    $user->save();
    if ($user) {
      return [
        'success'   => 1,
        'message'   => 'Đăng ký user ' . $user->first_name . ' ' . $user->last_name . ' thành công!',
      ];
    } else {
      return [
        'success'   => 0,
        'message'   => 'Đăng ký user thất bại',
      ];
    }
  }

  public  function update($data)
  {
    $user = User::find($data['id']);
    if (isset($data['avatar'])) {
      $user->avatar = $data['avatar'];
    }
    if (isset($data['new_password'])) {
      $user->password = $data['new_password'];
    }
    $user->first_name = $data['first_name'];
    $user->last_name = $data['last_name'];
    $user->email = $data['email'];
    $user->date_of_birth = $data['date_of_birth'];
    $user->gender = $data['gender'];
    $user->update();
    return [
      'success'   => 1,
      'message'   => 'Sửa thông tin user ' . $user->first_name . ' ' . $user->last_name . ' thành công',
    ];
  }

  public function delete($id)
  {
    $user = User::find($id);
    $user->delete();
    return [
      'success'   => 1,
      'message'   => 'Xóa user ' . $user->first_name . ' ' . $user->last_name . ' thành công',
    ];
  }
}