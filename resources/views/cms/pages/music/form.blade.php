@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/music/form'))
                <h1 class="m-0">
                    Thêm music
                </h1>
                @else
                <h1 class="m-0">
                    Sửa thông tin music
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm music</li>
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
                <form method="post" action="{{ request()->is('cms/music/form') ? route('cms.music.create') : route('cms.music.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($music)
                    <input type="hidden" name="id" class="form-control" value="{{ $music->id }}">
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
                                        <label for="exampleInputEmail1">Tên bài hát</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Nhập tên bài hát"
                                            value="{{ !isset($music->id) ? old('name') : $music->name }}"
                                        >
                                        <div class="text-danger">
                                            @if($errors->has('name')) {{ $errors->first('name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên bài hát ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="Nhập tên bài hát ( tiếng Anh )"
                                            value="{{ !isset($music->id) ? old('name_en') : $music->name_en }}"
                                        >
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tác giả</label>
                                        <input type="text" class="form-control" name="author" id="author"
                                            placeholder="Nhập tên tác giả"
                                            value="{{ !isset($music->id) ? old('author') : $music->author }}">
                                        <div class="text-danger">
                                            @if($errors->has('author')) {{ $errors->first('author') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên tác giả ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="author_en" id="author_en"
                                            placeholder="Nhập tên tác giả ( tiếng Anh )"
                                            value="{{ !isset($music->id) ? old('author_en') : $music->author_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('author_en')) {{ $errors->first('author_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng thái</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                                value="1" @if (!isset($music->id))
                                            {{ old('status') == 1 ? 'checked=""' : '' }} @else
                                            {{ $music->status == 1 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio1">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                                value="2" @if (!isset($music->id))
                                            {{ old('status') == 2 ? 'checked=""' : '' }} @else
                                            {{ $music->status == 2 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                        </div>
                                        <div class="text-danger">
                                            @if($errors->has('status')) {{ $errors->first('status') }} @endif
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" value="Submit">Nhập</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-outline card-warning lfm-box" id="image_container">
                                <div class="card-header">
                                    <h3 class="card-title">Chọn ảnh </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <div class="lfm-holder">
                                        @if (old('image') != null && !isset($ecoSystem->id))
                                        <img src="{{ old('image') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($music->image) && isset($music->id))
                                        <img src="{{ $music->image }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        <div class="text-danger">
                                            @if($errors->has('image')) {{ $errors->first('image') }} @endif
                                        </div>
                                    </div>
                                    <i class="description text-info">Light mode</i>
                                    <button type="button" class="btn btn-warning btn-block btn-flat lfm" id="addUserButton"
                                        data-input-name="image"><i class="fa fa-plus"></i>
                                        Chọn ảnh</button>
                                </div>
                            </div>
                            <div class="card card-outline card-warning lfm-box bg-dark" id="image_container">
                                <div class="card-header">
                                    <h3 class="card-title">Chọn ảnh </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <div class="lfm-holder">
                                        @if (old('image_dark') != null && !isset($music->id))
                                        <img src="{{ old('image_dark') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($music->image_dark) && isset($music->id))
                                        <img src="{{ $music->image_dark }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        <div class="text-danger">
                                            @if($errors->has('image_dark')) {{ $errors->first('image_dark') }} @endif
                                        </div>
                                    </div>
                                    <i class="description text-info">Dark mode</i>
                                    <button type="button" class="btn btn-warning btn-block btn-flat lfm" id="addUserButton"
                                        data-input-name="image_dark"><i class="fa fa-plus"></i>
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