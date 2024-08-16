@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/blog/form'))
                <h1 class="m-0">
                    Thêm Blog
                </h1>
                @else
                <h1 class="m-0">
                    Sửa Blog
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm Blog</li>
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
                <form method="post" action="{{ request()->is('cms/blog/form') ? route('cms.blog.create') : route('cms.blog.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($blog)
                    <input type="hidden" name="id" class="form-control" value="{{ $blog->id }}">
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
                                        <label>Danh mục</label>
                                            <select class="form-control select2" id="category" name="category" style="width: 100%;">
                                            <option value="" selected="selected" hidden="hidden">Chọn danh mục</option>
                                                @foreach( $category as $key => $value)
                                                <option value="{{ $key }}" 
                                                {{ (old('category') == $key || (isset($blog->id) && $blog->category == $key)) ? 'selected' : '' }}
                                                >{{ $value['label'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @if($errors->has('category')) {{ $errors->first('category') }} @endif
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên bài viết</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Nhập tên bài viết"
                                            value="{{ !isset($blog->id) ? old('name') : $blog->name }}">
                                        <div class="text-danger">
                                            @if($errors->has('name')) {{ $errors->first('name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên bài viết ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="Nhập tên bài viết ( tiếng Anh )"
                                            value="{{ !isset($blog->id) ? old('name_en') : $blog->name_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="Nhập mô tả"
                                            value="{{ !isset($blog->id) ? old('description') : $blog->description }}">
                                        <div class="text-danger">
                                            @if($errors->has('description')) {{ $errors->first('description') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="description_en" id="description_en"
                                            placeholder="Nhập mô tả tiếng Anh"
                                            value="{{ !isset($blog->id) ? old('description_en') : $blog->description_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('description_en')) {{ $errors->first('description_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Đường dẫn bài viết</label>
                                        <input type="text" class="form-control" name="link" id="link"
                                            placeholder="Nhập đường dẫn bài viết"
                                            value="{{ !isset($blog->id) ? old('link') : $blog->link }}">
                                        <div class="text-danger">
                                            @if($errors->has('link')) {{ $errors->first('link') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Đường dẫn bài viết ( tiếng Anh)</label>
                                        <input type="text" class="form-control" name="link_en" id="link_en"
                                            placeholder="Nhập đường dẫn bài viết ( tiếng Anh )"
                                            value="{{ !isset($blog->id) ? old('link_en') : $blog->link_en }}" required>
                                        <div class="text-danger">
                                            @if($errors->has('link_en')) {{ $errors->first('link_en') }} @endif
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
                                        @if (old('image') != null && !isset($blog->id))
                                        <img src="{{ old('image') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($blog->image) && isset($blog->id))
                                        <img src="{{ $blog->image }}" class="img-fluid mb-2" alt="white sample"
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
                                        @if (old('image_dark') != null && !isset($blog->id))
                                        <img src="{{ old('image_dark') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($blog->image_dark) && isset($blog->id))
                                        <img src="{{ $blog->image_dark }}" class="img-fluid mb-2" alt="white sample"
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
