@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/ecosystem/form'))
                <h1 class="m-0">
                    Thêm Ecosystem
                </h1>
                @else
                <h1 class="m-0">
                    Sửa Ecosystem
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm Ecosystem</li>
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
                <form method="post" action="{{ request()->is('cms/ecosystem/form') ? route('cms.ecosystem.create') : route('cms.ecosystem.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($ecoSystem)
                    <input type="hidden" name="id" class="form-control" value="{{ $ecoSystem->id }}">
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
                                        <label>Category</label>
                                            <select class="form-control select2" id="category" name="category" style="width: 100%;">
                                            <option value="" selected="selected" hidden="hidden">Choose category</option>
                                                @foreach( $category as $key => $value)
                                                <option value="{{ $key }}" {{isset($ecoSystem->id) && $ecoSystem->category == $key ? 'selected' : '' }} >{{ $value['label'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @if($errors->has('category')) {{ $errors->first('category') }} @endif
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter Name"
                                            value="{{ !isset($ecoSystem->id) ? old('name') : $ecoSystem->name }}">
                                        <div class="text-danger">
                                            @if($errors->has('name')) {{ $errors->first('name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name english</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="Enter Name english"
                                            value="{{ !isset($ecoSystem->id) ? old('name_en') : $ecoSystem->name_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="Enter Description"
                                            value="{{ !isset($ecoSystem->id) ? old('description') : $ecoSystem->description }}">
                                        <div class="text-danger">
                                            @if($errors->has('description')) {{ $errors->first('description') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description english</label>
                                        <input type="text" class="form-control" name="description_en" id="description_en"
                                            placeholder="Enter Description english"
                                            value="{{ !isset($ecoSystem->id) ? old('description_en') : $ecoSystem->description_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('description_en')) {{ $errors->first('description_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group" id="partner_container">
                                        <label>Partner</label>
                                            <select class="form-control select2" name="partner" id="partner" style="width: 100%;">
                                            <option value="" selected="selected" hidden="hidden">Choose partner</option>
                                                @foreach($partners as $partner)
                                                <option value="{{$partner->id}}" {{ isset($ecoSystem->id) && $ecoSystem->partner_id == $partner->id ? 'selected' : '' }}>{{ $partner->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @if($errors->has('partner')) {{ $errors->first('partner') }} @endif
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
                                        @if (old('image') != null && !isset($ecoSystem->id))
                                        <img src="{{ old('image') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($ecoSystem->image) && isset($ecoSystem->id))
                                        <img src="{{ $ecoSystem->image }}" class="img-fluid mb-2" alt="white sample"
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
                                        @if (old('image_dark') != null && !isset($ecoSystem->id))
                                        <img src="{{ old('image_dark') }}" class="img-fluid mb-2" alt="white sample"
                                            style="width: 100%" />
                                        @endif
                                        @if (isset($ecoSystem->image_dark) && isset($ecoSystem->id))
                                        <img src="{{ $ecoSystem->image_dark }}" class="img-fluid mb-2" alt="white sample"
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
