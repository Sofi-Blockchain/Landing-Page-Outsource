@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/partner/form'))
                <h1 class="m-0">
                    Thêm partner
                </h1>
                @else
                <h1 class="m-0">
                    Sửa partner
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm partner</li>
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
                <form method="post" action="{{ request()->is('cms/partner/form') ? route('cms.partner.create') : route('cms.partner.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($partner)
                    <input type="hidden" name="id" class="form-control" value="{{ $partner->id }}">
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
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter Name"
                                            value="{{ !isset($partner->id) ? old('name') : $partner->name }}"
                                            required>
                                        <div class="text-danger">
                                            @if($errors->has('name')) {{ $errors->first('name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Short name</label>
                                        <input type="text" class="form-control" name="short_name" id="short_name"
                                            placeholder="Enter Short name"
                                            value="{{ !isset($partner->id) ? old('short_name') : $partner->short_name }}">
                                        <div class="text-danger">
                                            @if($errors->has('short_name')) {{ $errors->first('short_name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name English</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="Enter name English"
                                            value="{{ !isset($partner->id) ? old('name_en') : $partner->name_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                                value="1" @if (!isset($partner->id))
                                            {{ old('status') == 1 ? 'checked=""' : '' }} @else
                                            {{ $partner->status == 1 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio1">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                                value="2" @if (!isset($partner->id))
                                            {{ old('status') == 2 ? 'checked=""' : '' }} @else
                                            {{ $partner->status == 2 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio3"
                                                value="3" @if (!isset($partner->id))
                                            {{ old('status') == 3 ? 'checked=""' : '' }} @else
                                            {{ $partner->status == 3 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio3">Pin to web</label>
                                        </div>
                                        <div class="text-danger">
                                            @if($errors->has('status')) {{ $errors->first('status') }} @endif
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
                                    <h3 class="card-title">Chọn Logo</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <div class="lfm-holder">
                                        @if (old('logo') != null && !isset($partner->id))
                                        <img src="{{ old('logo') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($partner->logo) && isset($partner->id))
                                        <img src="{{ $partner->logo }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        <div class="text-danger">
                                            @if($errors->has('logo')) {{ $errors->first('logo') }} @endif
                                        </div>
                                    </div>
                                    <i class="description text-info">Mô tả chức năng</i>
                                    <button type="button" class="btn btn-warning btn-block btn-flat lfm" id="addUserButton"
                                        data-input-name="logo"><i class="fa fa-plus"></i>
                                        Chọn ảnh</button>
                                </div>
                            </div>
                            <div class="card card-outline card-warning lfm-box bg-dark">
                                <div class="card-header">
                                    <h3 class="card-title">Chọn Logo dark mode</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <div class="lfm-holder">
                                        @if (old('logo_dark') != null && !isset($partner->id))
                                        <img src="{{ old('logo_dark') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($partner->logo_dark) && isset($partner->id))
                                        <img src="{{ $partner->logo_dark }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        <div class="text-danger">
                                            @if($errors->has('logo_dark')) {{ $errors->first('logo_dark') }} @endif
                                        </div>
                                    </div>
                                    <i class="description text-info">Mô tả chức năng</i>
                                    <button type="button" class="btn btn-warning btn-block btn-flat lfm" id="addUserButton"
                                        data-input-name="logo_dark"><i class="fa fa-plus"></i>
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
