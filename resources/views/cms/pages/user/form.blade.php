@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/user/form'))
                <h1 class="m-0">
                    Thêm quản trị viên
                </h1>
                @else
                <h1 class="m-0">
                    Sửa thông tin quản trị viên
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm quản trị viên</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <form method="post" action="{{ request()->is('cms/user/form') ? route('cms.user.create') : route('cms.user.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($user)
                    <input type="hidden" name="id" class="form-control" value="{{ $user->id }}">
                    @endisset
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card card-info card-outline">
                                <div class="p-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name"
                                            placeholder="Enter Last name"
                                            value="{{ !isset($user->id) ? old('last_name') : $user->last_name }}"
                                            required>
                                        <div class="text-danger">
                                            @if($errors->has('last_name')) {{ $errors->first('last_name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name"
                                            placeholder="Enter First name"
                                            value="{{ !isset($user->id) ? old('first_name') : $user->first_name }}">
                                        <div class="text-danger">
                                            @if($errors->has('first_name')) {{ $errors->first('first_name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giới tính</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                                value="1" @if (!isset($user->id))
                                            {{ old('gender') == 1 ? 'checked=""' : '' }} @else
                                            {{ $user->gender == 1 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                                value="2" @if (!isset($user->id))
                                            {{ old('gender') == 2 ? 'checked=""' : '' }} @else
                                            {{ $user->gender == 2 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                                                value="3" @if (!isset($user->id))
                                            {{ old('gender') == 3 ? 'checked=""' : '' }} @else
                                            {{ $user->gender == 3 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio3">Khác </label>
                                        </div>
                                        <div class="text-danger">
                                            @if($errors->has('gender')) {{ $errors->first('gender') }} @endif
                                        </div>
                                    </div>
                                    <div class="md-form md-outline input-with-post-icon datepicker">
                                        <label for="exampleInputEmail1">Ngày sinh</label>
                                        <input class="form-control" type="date" name="date_of_birth" id="date_of_birth"
                                            value="{{ !isset($user->id) ? old('date_of_birth') : \Carbon\Carbon::parse($user->date_of_birth)->format('Y-m-d') }}">
                                        <div class="text-danger">
                                            @if($errors->has('date_of_birth')) {{ $errors->first('date_of_birth') }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter email"
                                            value="{{ !isset($user->id) ? old('email') : $user->email }}"
                                            >
                                        <div class="text-danger">
                                            @if($errors->has('email')) {{ $errors->first('email') }} @endif
                                        </div>
                                    </div>
                                    @if(isset($user->id))
                                        @if(auth()->user()->id == $user->id)
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mật khẩu</label>
                                            <input type="password" class="form-control" name="current_password" id="current_password"
                                            value=""
                                                placeholder="Password">
                                            <div class="text-danger">
                                                @if($errors->has('current_password')) {{ $errors->first('current_password') }} @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mật khẩu mới</label>
                                            <input type="password" class="form-control" name="new_password" id="new_password"
                                            value=""
                                                placeholder="New Password">
                                            <div class="text-danger">
                                                @if($errors->has('new_password')) {{ $errors->first('new_password') }} @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Xác nhận mật khẩu mới</label>
                                            <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation"
                                            value=""
                                                placeholder="New Password">
                                            <div class="text-danger">
                                                @if($errors->has('new_password_confirmation')) {{ $errors->first('new_password_confirmation') }} @endif
                                            </div>
                                        </div>
                                    @endif
                                    @else
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                            value=""
                                                placeholder="Password">
                                            <div class="text-danger">
                                                @if($errors->has('password')) {{ $errors->first('password') }} @endif
                                            </div>
                                        </div>
                                @endif
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" value="Submit">Nhập</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-outline card-warning lfm-box">
                                <div class="card-header">
                                    <h3 class="card-title">Chọn ảnh đại diện</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <div class="lfm-holder">
                                        @if (old('avatar') != null && !isset($user->id))
                                        <img src="{{ old('avatar') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($user->avatar) && isset($user->id))
                                        <img src="{{ $user->avatar }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        <div class="text-danger">
                                            @if($errors->has('avatar')) {{ $errors->first('avatar') }} @endif
                                        </div>
                                    </div>
                                    <i class="description text-info">Mô tả chức năng</i>
                                    <button type="button" class="btn btn-warning btn-block btn-flat lfm"
                                        data-input-name="avatar"><i class="fa fa-plus"></i>
                                        Chọn ảnh</button>
                                </div>
                            </div>
                            <div class="checkbox-group">
                                <div class="card lfm-box card-info card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">Chọn quyền</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: block;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop