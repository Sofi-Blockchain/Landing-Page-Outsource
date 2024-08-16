@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/stream/form'))
                <h1 class="m-0">
                    Thêm Stream
                </h1>
                @else
                <h1 class="m-0">
                    Sửa Stream
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm Stream</li>
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
                <form method="post" action="{{ request()->is('cms/stream/form') ? route('cms.stream.create') : route('cms.stream.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($stream)
                    <input type="hidden" name="id" class="form-control" value="{{ $stream->id }}">
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
                                        <label for="exampleInputEmail1">Tên stream</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Nhập tên stream"
                                            value="{{ !isset($stream->id) ? old('name') : $stream->name }}">
                                        <div class="text-danger">
                                            @if($errors->has('name')) {{ $errors->first('name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên stream ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="Nhập tên stream ( tiếng Anh )"
                                            value="{{ !isset($stream->id) ? old('name_en') : $stream->name_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Đường dẫn bài viết</label>
                                        <input type="text" class="form-control" name="link" id="link"
                                            placeholder="Nhập đường dẫn bài viết"
                                            value="{{ !isset($stream->id) ? old('link') : $stream->link }}">
                                        <div class="text-danger">
                                            @if($errors->has('link')) {{ $errors->first('link') }} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" value="Submit">Nhập</button>
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
                                        @if (old('image') != null && !isset($stream->id))
                                        <img src="{{ old('image') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($stream->image) && isset($stream->id))
                                        <img src="{{ $stream->image }}" class="img-fluid mb-2" alt="white sample"
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
                                        @if (old('image_dark') != null && !isset($stream->id))
                                        <img src="{{ old('image_dark') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($stream->image_dark) && isset($stream->id))
                                        <img src="{{ $stream->image_dark }}" class="img-fluid mb-2" alt="white sample"
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
@section('scripts')
    <script>
        $(document).ready(function () {
        $('#category').on('change', function () {
            var selectedOption = $(this).val();
            if (selectedOption == 4) {
                $('#partner_container, #image_container').hide();
            } else {
                $('#partner_container, #image_container').show();
            }
        });
        $('#category').trigger('change');
    });
    </script>
@endsection