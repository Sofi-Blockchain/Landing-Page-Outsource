@extends('cms.layouts.blank')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-warning">
                <div class="card-header text-center">
                    <span class="h1"><b>SOFIN</b> Network</span>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                        @endforeach
                    @endif
                    <p class="login-box-msg text-warning">Content Managerment System</p>

                    <form action="{{ route('cms.loginProgress') }}" method="post">
                        @csrf
                        <div class="input-group mb-3" for="email">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <div class="error">
                            <span class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                        <div class="input-group mb-3" for="password">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Mật khẩu">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="error">
                            <span class="text-danger">{{$message}}</span>
                            </div>
                        @enderror
                        @if(session('login_fail'))
                            <!-- <p>{{session('login_fail')}}</p> -->
                            <div class="error">
                            <span class="text-danger">{{session('login_fail')}}</span>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning btn-block">Đăng nhập</button>
                            </div>
                        </div>
                    </form>

                    <p class="mt-4">
                        Nếu bạn gặp sự cố.
                        <a href="#">Liên hệ bộ phận kĩ thuật.</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection