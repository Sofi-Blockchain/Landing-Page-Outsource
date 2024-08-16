@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Career')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/careers/form'))
                <h1 class="m-0">
                    Thêm careers
                </h1>
                @else
                <h1 class="m-0">
                    Sửa careers
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm careers</li>
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
                <form method="post" action="{{ request()->is('cms/careers/form') ? route('cms.careers.create') : route('cms.careers.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($careers)
                    <input type="hidden" name="id" class="form-control" value="{{ $careers->id }}">
                    @endisset
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-info card-outline">
                                <div class="p-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Nhập tên careers"
                                            value="{{ !isset($careers->id) ? old('name') : $careers->name }}"
                                            >
                                        <div class="text-danger">
                                            @if($errors->has('name')) {{ $errors->first('name') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en"
                                            placeholder="Nhập tên careers ( tiếng Anh )"
                                            value="{{ !isset($careers->id) ? old('name_en') : $careers->name_en }}"
                                            >
                                        <div class="text-danger">
                                            @if($errors->has('name_en')) {{ $errors->first('name_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí</label>
                                        <select class="form-control select2" id="location" name="location" style="width: 100%;">
                                            <option value="" selected="selected" hidden="hidden">Chọn vị trí</option>
                                                @foreach( $location as $key => $value)
                                                <option value="{{ $key }}" 
                                                {{ (old('location') == $key || (isset($careers->id) && $careers->location == $key)) ? 'selected' : '' }}
                                                >{{ $value['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @if($errors->has('location')) {{ $errors->first('location') }} @endif
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phòng ban</label>
                                        <select class="form-control select2" id="department" name="department" style="width: 100%;">
                                            <option value="" selected="selected" hidden="hidden">Chọn phòng ban</option>
                                                @foreach( $department as $key => $value)
                                                <option value="{{ $key }}" 
                                                {{ (old('department') == $key || (isset($careers->id) && $careers->department == $key)) ? 'selected' : '' }}
                                                >{{ $value['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @if($errors->has('department')) {{ $errors->first('department') }} @endif
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                                value="1" @if (!isset($careers->id))
                                            {{ old('status') == 1 ? 'checked=""' : '' }} @else
                                            {{ $careers->status == 1 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio1">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                                value="2" @if (!isset($careers->id))
                                            {{ old('status') == 2 ? 'checked=""' : '' }} @else
                                            {{ $careers->status == 2 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio3"
                                                value="3" @if (!isset($careers->id))
                                            {{ old('status') == 3 ? 'checked=""' : '' }} @else
                                            {{ $careers->status == 3 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio3">Hide</label>
                                        </div>
                                        <div class="text-danger">
                                            @if($errors->has('status')) {{ $errors->first('status') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <textarea class="ta-short" type="text" class="form-control" name="description" id="description"
                                            placeholder="Nhập mô tả"
                                        >
                                        {{ !isset($careers->id) ? old('description') : $careers->description }}
                                        </textarea>
                                        <div class="text-danger">
                                            @if($errors->has('description')) {{ $errors->first('description') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả ( tiếng Anh )</label>
                                        <textarea class="ta-short" type="text" class="form-control" name="description_en" id="description_en"
                                            placeholder="Nhập mô tả ( Tiếng Anh )"
                                        >
                                        {{ !isset($careers->id) ? old('description_en') : $careers->description_en }}
                                        </textarea>
                                        <div class="text-danger">
                                            @if($errors->has('description_en')) {{ $errors->first('description_en') }} @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" value="Submit">Nhập</button>
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
