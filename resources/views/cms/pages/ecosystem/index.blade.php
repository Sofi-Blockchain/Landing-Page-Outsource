@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    Danh sách EcoSystem
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">Danh sách EcoSystem</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-10">
                                <h3 class="card-title"></h3>
                            </div>
                            <div class="col-lg-2">
                                <a href="{{ route('cms.ecosystem.form') }}">
                                    <div class="btn-group w-100">
                                        <span class="btn btn-outline-primary">
                                            <i class="fas fa-plus"></i>
                                            <span>Thêm EcoSystem</span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Image dark</th>
                                    <th>Partner</th>
                                    <th>Category</th>
                                    <th width="150">Ngày tạo / cập nhật</th>
                                    <th width="100">Chức năng</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop

@section('scripts')
@if(Session::has('message'))
    <script>
        // console.log(1111);
        $(function() {
            var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 10000
            });
        Toast.fire({
        icon: 'success',
        title: "{{Session::get('message')}}",
      })
    });
    </script>
@endif
<script>
    $(document).ready(function() {
        var table = $('#datatable').DataTable({
            processing: false,
            serverSide: true,
            info: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "_all",
                defaultContent: "",

            }],
            order: [
                [0, 'desc']
            ],
            ajax: "{{ $datatableRoute }}",
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'image_dark',
                    name: 'image_dark'
                },
                {
                    data: 'partner_id',
                    name: 'partner_id'
                },
                {
                    data: 'category',
                    name: 'category'
                },
                {
                    data: 'tracking',
                    name: 'tracking'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>
@endsection
