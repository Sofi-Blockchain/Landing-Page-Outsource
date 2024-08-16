@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | MilesStone')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/milesstones/form'))
                <h1 class="m-0">
                    Thêm MilesStone
                </h1>
                @else
                <h1 class="m-0">
                    Sửa thông tin MilesStone
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm MilesStone</li>
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
                <form method="post" action="{{ request()->is('cms/milesstones/form') ? route('cms.milesstones.create') : route('cms.milesstones.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($milesStone)
                    <input type="hidden" name="id" class="form-control" value="{{ $milesStone->id }}">
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
                                        <label for="exampleInputEmail1">Mô tả</label>
                                        <input type="text" class="form-control" name="description" id="description"
                                            placeholder="Nhập mô tả"
                                            value="{{ !isset($milesStone->id) ? old('description') : $milesStone->description }}">
                                        <div class="text-danger">
                                            @if($errors->has('description')) {{ $errors->first('description') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="description_en" id="description_en"
                                            placeholder="Nhập mô tả ( tiếng Anh )"
                                            value="{{ !isset($milesStone->id) ? old('description_en') : $milesStone->description_en }}">
                                        <div class="text-danger">
                                            @if($errors->has('description_en')) {{ $errors->first('description_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Năm</label>
                                        <input type="text" class="form-control" name="year" id="year"
                                            placeholder="Nhập năm"
                                            value="{{ !isset($milesStone->id) ? old('year') : $milesStone->year }}">
                                        <div class="text-danger">
                                            @if($errors->has('year')) {{ $errors->first('year') }} @endif
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