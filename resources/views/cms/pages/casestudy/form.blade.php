@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/casestudy/form'))
                <h1 class="m-0">
                    Thêm Casestudy
                </h1>
                @else
                <h1 class="m-0">
                    Sửa Casestudy
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm casestudy</li>
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
                <form method="post" action="{{ request()->is('cms/casestudy/form') ? route('cms.casestudy.create') : route('cms.casestudy.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($caseStudy)
                    <input type="hidden" name="id" class="form-control" value="{{ $caseStudy->id }}">
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
                                        <label for="exampleInputEmail1">Tên</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="nhập tên"
                                            value="{{ !isset($caseStudy->id) ? old('name') : $caseStudy->name }}" >
                                        <div class="text-danger">
                                            @if($errors->has('name')) {{ $errors->first('name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="nhập tên ( tiếng Anh )"
                                            value="{{ !isset($caseStudy->id) ? old('name_en') : $caseStudy->name_en }}" >
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="Nhập mô tả"
                                            value="{{ !isset($caseStudy->id) ? old('description') : $caseStudy->description }}" >
                                        <div class="text-danger">
                                            @if($errors->has('description')) {{ $errors->first('description') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="description_en" id="description_en"
                                            placeholder="Nhập mô tả ( tiếng Anh )"
                                            value="{{ !isset($caseStudy->id) ? old('description_en') : $caseStudy->description_en }}" >
                                        <div class="text-danger">
                                            @if($errors->has('description_en')) {{ $errors->first('description_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                                value="1" @if (!isset($caseStudy->id))
                                            {{ old('status') == 1 ? 'checked=""' : '' }} @else
                                            {{ $caseStudy->status == 1 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio1">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                                value="2" @if (!isset($caseStudy->id))
                                            {{ old('status') == 2 ? 'checked=""' : '' }} @else
                                            {{ $caseStudy->status == 2 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                        </div>
                                        <div class="text-danger">
                                            @if($errors->has('status')) {{ $errors->first('status') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chọn Nội Dung</label>
                                        <div class="form-check form-check-inline">
                                            <!-- Radio Button Đầu Tiên -->
                                            <input class="form-check-input" type="radio" name="status_content" id="image_radio" value="1"
                                                @if (!isset($caseStudy->id))
                                                    checked
                                                @elseif ($caseStudy->image != null)
                                                    checked
                                                @endif>
                                            <label class="form-check-label" for="image_radio">Hình Ảnh</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <!-- Radio Button Thứ Hai -->
                                            <input class="form-check-input" type="radio" name="status_content" id="video_radio" value="2"
                                                @if (isset($caseStudy->id) && $caseStudy->video != null)
                                                    checked
                                                @endif>
                                            <label class="form-check-label" for="video_radio">Video</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <!-- Radio Button Thứ Ba -->
                                            <input class="form-check-input" type="radio" name="status_content" id="url_radio" value="3"
                                                @if (isset($caseStudy->id) && $caseStudy->yt_embed_url != null)
                                                    checked
                                                @endif>
                                            <label class="form-check-label" for="url_radio">URL Nhúng Youtube</label>
                                        </div>
                                        <div class="text-danger">
                                            @if($errors->has('status_content')) {{ $errors->first('status_content') }} @endif
                                        </div>
                                    </div>
                                    <div id="url">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Youtube embed url</label>
                                            <input type="text" class="form-control" name="yt_url" id="yt_url"
                                                placeholder="Nhập đường dẫn"
                                                value="{{ !isset($caseStudy->id) ? old('yt_url') : $caseStudy->yt_embed_url }}">
                                            <div class="text-danger">
                                                @if($errors->has('yt_url')) {{ $errors->first('yt_url') }} @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Youtube embed url ( chế độ tối )</label>
                                            <input type="text" class="form-control" name="yt_url_dark" id="yt_url_dark"
                                                placeholder="Nhập đường dẫn ( chế độ tối )"
                                                value="{{ !isset($caseStudy->id) ? old('yt_url_dark') : $caseStudy->yt_embed_url_dark }}">
                                            <div class="text-danger">
                                                @if($errors->has('yt_url_dark')) {{ $errors->first('yt_url_dark') }} @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" value="Submit">Nhập</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div name="image-container" id="image-container">
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
                                            @if (old('image') != null && !isset($caseStudy->id))
                                            <img src="{{ old('image') }}" class="img-fluid mb-2" alt="white sample"
                                                style="width: 100%" />
                                            @endif
                                            @if (isset($caseStudy->image) && isset($caseStudy->id))
                                            <img src="{{ $caseStudy->image }}" class="img-fluid mb-2" alt="white sample"
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
                                            @if (old('image_dark') != null && !isset($caseStudy->id))
                                            <img src="{{ old('image_dark') }}" class="img-fluid mb-2" alt="white sample"
                                                style="width: 100%" />
                                            @endif
                                            @if (isset($caseStudy->image_dark) && isset($caseStudy->id))
                                            <img src="{{ $caseStudy->image_dark }}" class="img-fluid mb-2" alt="white sample"
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
                            <div name="video" id="video-container">
                                <div class="card card-outline card-success lfm-box" id="video_container">
                                    <div class="card-header">
                                        <h3 class="card-title">Chọn Video</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" style="display: block;">
                                        <div class="lfm-holder" id="video">
                                            @if (isset($caseStudy) && $caseStudy->video)
                                            @if (in_array(pathinfo($caseStudy->video, PATHINFO_EXTENSION), ['mp4', 'mov', 'webm', 'avi', 'ogv']))
                                                <video id="logo-intro" preload="true" playsinline controls muted style="width: 100%">
                                                <input type="hidden" name="video" value="{{ $caseStudy->video }}">
                                                <source src="{{ $caseStudy->video }}" type="video/{{ pathinfo($caseStudy->video, PATHINFO_EXTENSION) }}" />
                                                </video>
                                            @else
                                                <div class="filtr-item filtr-item--many">
                                                <a href="{{ $caseStudy->video }}" data-toggle="lightbox" style="width: 100%" data-title="{{ $caseStudy->video }}">
                                                    <img src="{{ $caseStudy->video }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                                                </a>
                                                    <input type="hidden" name="video" value="{{ $caseStudy->video }}">
                                                    <button type="button" class="btn bg-gradient-danger btn-sm filtr-item__btn-delete"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                </div>
                                            @endif
                                            @endif
                                        </div>
                                        <i class="description text-info">Có thể chọn video hoặc hình ảnh</i>
                                        <button type="button" class="btn btn-success btn-block btn-flat lfm" data-input-name="video"><i class="fa fa-plus"></i>
                                            Chọn ảnh/video</button>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="card card-outline card-success lfm-box" id="video_container">
                                    <div class="card-header">
                                        <h3 class="card-title">Chọn Video ( chế độ tối)</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" style="display: block;">
                                        <div class="lfm-holder" id="video_dark">
                                            @if (isset($caseStudy) && $caseStudy->video_dark)
                                            @if (in_array(pathinfo($caseStudy->video, PATHINFO_EXTENSION), ['mp4', 'mov', 'webm', 'avi', 'ogv']))
                                                <video id="logo-intro" preload="true" playsinline controls muted style="width: 100%">
                                                <input type="hidden" name="video_dark" value="{{ $caseStudy->video_dark }}">
                                                <source src="{{ $caseStudy->video_dark }}" type="video/{{ pathinfo($caseStudy->video_dark, PATHINFO_EXTENSION) }}" />
                                                </video>
                                            @else
                                                <div class="filtr-item filtr-item--many">
                                                <a href="{{ $caseStudy->video_dark }}" data-toggle="lightbox" style="width: 100%" data-title="{{ $caseStudy->video_dark }}">
                                                    <img src="{{ $caseStudy->video }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                                                </a>
                                                    <input type="hidden" name="video_dark" value="{{ $caseStudy->video_dark }}">
                                                    <button type="button" class="btn bg-gradient-danger btn-sm filtr-item__btn-delete"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                </div>
                                            @endif
                                            @endif
                                        </div>
                                        <i class="description text-info">Có thể chọn video hoặc hình ảnh</i>
                                        <button type="button" class="btn btn-success btn-block btn-flat lfm" data-input-name="video_dark"><i class="fa fa-plus"></i>
                                            Chọn ảnh/video</button>
                                    </div>
                                    <!-- /.card-body -->
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

    document.addEventListener("DOMContentLoaded", function () {
        const statusRadios = document.querySelectorAll('input[name="status_content"]');
        const imageRadio = document.getElementById('image_radio');
        const videoRadio = document.getElementById('video_radio');
        const urlRadio = document.getElementById('url_radio');
        const imageDiv = document.getElementById('image-container');
        const videoDiv = document.getElementById('video-container');
        const urlDiv = document.getElementById('url');
        let isFirstSelection = true;

        function hideAllInputs() {
            imageDiv.style.display = 'none';
            videoDiv.style.display = 'none';
            urlDiv.style.display = 'none';
        }

        function showSelectedInput() {
            hideAllInputs();

            var selectedRadio = document.querySelector('input[name="status_content"]:checked');
            if (selectedRadio) {
                var selectedValue = selectedRadio.value;

                if (selectedValue === '1') {
                    imageDiv.style.display = 'block';
                } else if (selectedValue === '2') {
                    videoDiv.style.display = 'block';
                } else if (selectedValue === '3') {
                    urlDiv.style.display = 'block';
                }
            }
        }

        showSelectedInput();

        statusRadios.forEach(function (radio) {
            radio.addEventListener('change', function () {
                if (isFirstSelection) {
                    const shouldReset = confirm("Bạn có chắc chắn muốn chọn button này không ?");
                    if (shouldReset) {
                        showSelectedInput();
                    } else {
                        radio.checked = false;
                        const checkedRadio = document.querySelector('input[name="status_content"]:checked');
                        if (checkedRadio) {
                            checkedRadio.checked = true;
                        }
                    }
                }
            });
        });
    });
</script>
@endsection
