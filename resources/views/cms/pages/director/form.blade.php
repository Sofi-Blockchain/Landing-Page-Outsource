@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/director/form'))
                <h1 class="m-0">
                    Thêm director
                </h1>
                @else
                <h1 class="m-0">
                    Sửa director
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm director</li>
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
                <form method="post" action="{{ request()->is('cms/director/form') ? route('cms.director.create') : route('cms.director.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($director)
                    <input type="hidden" name="id" class="form-control" value="{{ $director->id }}">
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
                                            value="{{ !isset($director->id) ? old('last_name') : $director->last_name }}"
                                            required>
                                        <div class="text-danger">
                                            @if($errors->has('last_name')) {{ $errors->first('last_name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name"
                                            placeholder="Enter First name"
                                            value="{{ !isset($director->id) ? old('first_name') : $director->first_name }}">
                                        <div class="text-danger">
                                            @if($errors->has('first_name')) {{ $errors->first('first_name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên tiếng anh</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="Enter Name English"
                                            value="{{ !isset($director->id) ? old('name_en') : $director->name_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giới tính</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                                value="1" @if (!isset($director->id))
                                            {{ old('gender') == 1 ? 'checked=""' : '' }} @else
                                            {{ $director->gender == 1 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                                value="2" @if (!isset($director->id))
                                            {{ old('gender') == 2 ? 'checked=""' : '' }} @else
                                            {{ $director->gender == 2 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3"
                                                value="3" @if (!isset($director->id))
                                            {{ old('gender') == 3 ? 'checked=""' : '' }} @else
                                            {{ $director->gender == 3 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio3">Khác </label>
                                        </div>
                                        <div class="text-danger">
                                            @if($errors->has('gender')) {{ $errors->first('gender') }} @endif
                                        </div>
                                    </div>
                                    <div class="md-form md-outline input-with-post-icon datepicker">
                                        <label for="exampleInputEmail1">Ngày sinh</label>
                                        <input class="form-control" type="date" name="date_of_birth" id="date_of_birth"
                                            value="{{ !isset($director->id) ? old('date_of_birth') : \Carbon\Carbon::parse($director->date_of_birth)->format('Y-m-d') }}">
                                        <div class="text-danger">
                                            @if($errors->has('date_of_birth')) {{ $errors->first('date_of_birth') }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Job position</label>
                                        <input type="text" class="form-control" name="job_position" id="job_position"
                                            placeholder="Enter Job position"
                                            value="{{ !isset($director->id) ? old('job_possition') : $director->job_possition }}"
                                            >
                                        <div class="text-danger">
                                            @if($errors->has('job_position')) {{ $errors->first('job_position') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Job position english</label>
                                        <input type="text" class="form-control" name="job_position_el" id="job_position_el"
                                            placeholder="Enter Job position"
                                            value="{{ !isset($director->id) ? old('job_possition_english') : $director->job_possition_english }}"
                                            >
                                        <div class="text-danger">
                                            @if($errors->has('job_position_el')) {{ $errors->first('job_position_el') }} @endif
                                        </div>
                                    </div>
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
                                        @if (old('avatar') != null && !isset($director->id))
                                        <img src="{{ old('avatar') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($director->avatar) && isset($director->id))
                                        <img src="{{ $director->avatar }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        <div class="text-danger">
                                            @if($errors->has('avatar')) {{ $errors->first('avatar') }} @endif
                                        </div>
                                    </div>
                                    <i class="description text-info">Mô tả chức năng</i>
                                    <button type="button" class="btn btn-warning btn-block btn-flat lfm" id="addUserButton"
                                        data-input-name="avatar"><i class="fa fa-plus"></i>
                                        Chọn ảnh</button>
                                </div>
                            </div>
                            <div class="card card-outline card-warning lfm-box bg-dark">
                                <div class="card-header">
                                    <h3 class="card-title">Chọn ảnh đại diện dark mode</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <div class="lfm-holder">
                                        @if (old('avatar_dark') != null && !isset($director->id))
                                        <img src="{{ old('avatar_dark') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($director->avatar_dark) && isset($director->id))
                                        <img src="{{ $director->avatar_dark }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        <div class="text-danger">
                                            @if($errors->has('avatar_dark')) {{ $errors->first('avatar_dark') }} @endif
                                        </div>
                                    </div>
                                    <i class="description text-info">Mô tả chức năng</i>
                                    <button type="button" class="btn btn-warning btn-block btn-flat lfm" id="addUserButton"
                                        data-input-name="avatar_dark"><i class="fa fa-plus"></i>
                                        Chọn ảnh</button>
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
