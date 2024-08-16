@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(request()->is('cms/faq/form'))
                <h1 class="m-0">
                    Thêm FAQ
                </h1>
                @else
                <h1 class="m-0">
                    Sửa FAQ
                </h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Thêm FAQ</li>
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
                <form method="post" action="{{ request()->is('cms/faq/form') ? route('cms.faq.create') : route('cms.faq.update') }}" enctype="multipart/form-data">
                    @csrf
                    @isset($faq)
                    <input type="hidden" name="id" class="form-control" value="{{ $faq->id }}">
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
                                        <label for="exampleInputEmail1">Câu hỏi</label>
                                        <input type="text" class="form-control" name="question" id="question"
                                            placeholder="Nhập câu hỏi"
                                            value="{{ !isset($faq->id) ? old('question') : $faq->question }}"
                                            >
                                        <div class="text-danger">
                                            @if($errors->has('question')) {{ $errors->first('question') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Câu hỏi ( tiếng Anh )</label>
                                        <input type="text" class="form-control" name="question_en" id="question_en"
                                            placeholder="Nhập câu hỏi ( tiếng Anh )"
                                            value="{{ !isset($faq->id) ? old('question_en') : $faq->question_en }}"
                                            >
                                        <div class="text-danger">
                                            @if($errors->has('question_en')) {{ $errors->first('question_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Câu trả lời</label>
                                        <textarea class="ta-short" type="text" class="form-control" name="answer" id="answer"
                                            placeholder="Nhập câu trả lời"
                                        >
                                        {{ !isset($faq->id) ? old('answer') : $faq->answer }}
                                        </textarea>
                                        <div class="text-danger">
                                            @if($errors->has('answer')) {{ $errors->first('answer') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Câu trả lời ( tiếng Anh )</label>
                                        <textarea class="ta-short" type="text" class="form-control" name="answer_en" id="answer_en"
                                            placeholder="Nhập câu trả lời ( tiếng Anh )"
                                        >
                                        {{ !isset($faq->id) ? old('answer_en') : $faq->answer_en }}
                                        </textarea>
                                        <div class="text-danger">
                                            @if($errors->has('answer_en')) {{ $errors->first('answer_en') }} @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                                value="1" @if (!isset($faq->id))
                                            {{ old('status') == 1 ? 'checked=""' : '' }} @else
                                            {{ $faq->status == 1 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio1">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                                value="2" @if (!isset($faq->id))
                                            {{ old('status') == 2 ? 'checked=""' : '' }} @else
                                            {{ $faq->status == 2 ? 'checked=""' : '' }} @endif>
                                            <label class="form-check-label" for="inlineRadio2">Inactive</label>
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
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop
