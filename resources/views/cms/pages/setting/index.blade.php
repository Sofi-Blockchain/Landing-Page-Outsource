@extends('cms.layouts.index')

@section('title', 'SOFIN Network CMS | Dashboard')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">
          Cài đặt hệ thống
        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-warning" href="{{ route('cms.index') }}">Trang chủ</a>
          </li>
          <li class="breadcrumb-item active">Cài đặt hệ thống</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <form action="{{ route('cms.system.store') }}" method="POST" class="col-md-3">
        @csrf
        <!-- Logo-->
        <div class="card card-warning card-outline lfm-box">
          <div class="card-body" style="display: block;">
            <div class="lfm-holder">
              @php
              $logo = '';
              if (!empty(old('logo'))) {
              $logo = old('logo');
              } elseif (isset($settings) && !empty($settings['logo']['value'])) {
              $logo = $settings['logo']['value'];
              }
              @endphp
              @if (!empty($logo))
              <img src="{{ $logo }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
              @endif
              @if($errors->has('logo'))
              <div class="text-danger">{{ $errors->first('logo') }}</div>
              @endif
            </div>
            <i class="description text-info">Logo</i>
            <button type="button" class="btn btn-warning btn-block btn-flat lfm" data-input-name="logo"><i class="fa fa-plus"></i> Chọn ảnh</button>
          </div>
        </div>
        <!-- /Logo -->
        <!-- Logo dark -->
        <div class="card card-warning card-outline bg-black lfm-box">
          <div class="card-body" style="display: block;">
            <div class="lfm-holder">
              @php
              $logo_dark = '';
              if (!empty(old('logo_dark'))) {
              $logo_dark = old('logo_dark');
              } elseif(isset($settings) && !empty($settings['logo_dark']['value'])) {
              $logo_dark = $settings['logo_dark']['value'];
              }
              @endphp
              @if (!empty($logo_dark))
              <img src="{{ $logo_dark }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
              @endif
              @if($errors->has('logo_dark'))
              <div class="text-danger">{{ $errors->first('logo_dark') }}</div>
              @endif
            </div>
            <i class="description text-info">Menu background</i>
            <button type="button" class="btn btn-warning btn-block btn-flat lfm" id="addUserButton" data-input-name="logo_dark"><i class="fa fa-plus"></i> Chọn ảnh</button>
          </div>
        </div>
        <!-- /Logo dark -->

        <!-- About Me Box -->
        <div class="card card-outline card-success">
          <div class="card-header">
            <h3 class="card-title">Thông tin doanh nghiệp</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <label for="fullname">Tên đầy đủ</label>
              <input type="text" name="full_name" class="form-control" id="full-name" placeholder="Tên đầy đủ" value="{{ $settings['full_name']['value'] }}">
            </div>
            <div class="form-group">
              <label for="short-name">Tên viết tắt</label>
              <input type="text" name="short_name" class="form-control" id="short-name" placeholder="Tên viết tắt" value="{{ $settings['short_name']['value'] }}">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ $settings['email']['value'] }}">
            </div>
            <div class="form-group">
              <label for="phone-vie">Số điện thoại (VIE)</label>
              <input type="text" name="phone_vie" class="form-control" id="phone-vie" placeholder="Số điện thoại (VIE)" value="{{ $settings['phone_vie']['value'] }}">
            </div>
            <div class="form-group">
              <label for="phone-eng">Số điện thoại (US)</label>
              <input type="text" name="phone_eng" class="form-control" id="phone-eng" placeholder="Số điện thoại (US)" value="{{ $settings['phone_eng']['value'] }}">
            </div>
            <div class="form-group">
              <label for="address">Địa chỉ</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="Địa chỉ" value="{{ $settings['address']['value'] }}">
            </div>
            <div class="form-group">
              <label for="release-year">Năm phát hành</label>
              <input type="number" maxlength="4" name="release_year" class="form-control" id="release-year" placeholder="Năm phát hành" value="{{ $settings['release_year']['value'] }}">
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-block btn-flat"><i class="fa fa-check" aria-hidden="true"></i> Lưu thay đổi</button>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </form>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary card-outline card-outline-tabs">
          <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Nổi bật</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Mô tả ngắn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Liên kết</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-stats-tab" data-toggle="pill" href="#custom-tabs-four-stats" role="tab" aria-controls="custom-tabs-four-stats" aria-selected="false">Thông số</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Hình ảnh</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
              <form action="{{ route('cms.system.store') }}" method="POST" class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                @csrf
                <div class="form-group row">
                  <label for="slogan-1" class="col-sm-2 col-form-label">Slogan 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="slogan_1" class="form-control" id="slogan-1" placeholder="Slogan 1" value="{{ $settings['slogan_1']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="slogan-2" class="col-sm-2 col-form-label">Slogan 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="slogan_2" class="form-control" id="slogan-2" placeholder="Slogan 2" value="{{ $settings['slogan_2']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="slogan-3" class="col-sm-2 col-form-label">Slogan 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="slogan_3" class="form-control" id="slogan-3" placeholder="Slogan 3" value="{{ $settings['slogan_3']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="slogan-4" class="col-sm-2 col-form-label">Slogan 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="slogan_4" class="form-control" id="slogan-4" placeholder="Slogan 4" value="{{ $settings['slogan_4']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="hashtag" class="col-sm-2 col-form-label">Hashtag</label>
                  <div class="col-sm-10">
                    <input type="text" name="hashtag" class="form-control" id="hashtag" placeholder="Hashtag" value="{{ $settings['hashtag']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="marquee" class="col-sm-2 col-form-label">Marquee</label>
                  <div class="col-sm-10">
                    <input type="text" name="marquee" class="form-control" id="marquee" placeholder="Marquee" value="{{ $settings['marquee']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="copyright" class="col-sm-2 col-form-label">Copyright</label>
                  <div class="col-sm-10">
                    <input type="text" name="copyright" class="form-control" id="copyright" placeholder="Copyright" value="{{ $settings['copyright']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="introduction" class="col-sm-2 col-form-label">Lời tựa</label>
                  <div class="col-sm-10">
                    <input type="text" name="introduction" class="form-control" id="introduction" placeholder="introduction" value="{{ $settings['introduction']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="foreword" class="col-sm-2 col-form-label">Lời hứa hẹn</label>
                  <div class="col-sm-10">
                    <input type="text" name="foreword" class="form-control" id="foreword" placeholder="Foreword" value="{{ $settings['foreword']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="contact-banner-description" class="col-sm-2 col-form-label">Mô tả liên hệ (homepage)</label>
                  <div class="col-sm-10">
                    <input type="text" name="contact_banner_description" class="form-control" id="contact-banner-description" placeholder="Mô tả liên hệ (homepage)" value="{{ $settings['contact_banner_description']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="banner-about-us-1" class="col-sm-2 col-form-label">Banner about us 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="banner_about_us_1" class="form-control" id="banner-about-us-1" placeholder="Banner about us 1" value="{{ $settings['banner_about_us_1']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="banner-about-us-2" class="col-sm-2 col-form-label">Banner about us 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="banner_about_us_2" class="form-control" id="banner-about-us-2" placeholder="Banner about us 2" value="{{ $settings['banner_about_us_2']['value'] }}">
                  </div>
                </div>
                <hr>
                <div class="form-group row pr-2">
                  <button type="submit" class="offset-sm-10 col-sm-2 btn btn-primary btn-block btn-flat"><i class="fa fa-check" aria-hidden="true"></i> Lưu thay đổi</button>
                </div>
              </form>
              <form action="{{ route('cms.system.store') }}" method="POST" class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                @csrf
                <div class="form-group row">
                  <label for="our-economic-standard" class="col-sm-2 col-form-label">Our Economic Standards</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="our_economic_standard" id="our-economic-standard" width="100%" rows="3">{{ $settings['our_economic_standard']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="our-culture" class="col-sm-2 col-form-label">Our Culture</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="our_culture" id="our-culture" width="100%" rows="3">{{ $settings['our_culture']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="our-ecosystem" class="col-sm-2 col-form-label">Our Ecosystem</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="our_ecosystem" id="our-ecosystem" width="100%" rows="3">{{ $settings['our_ecosystem']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="our-partner" class="col-sm-2 col-form-label">Our Partners</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="our_partner" id="our-partner" width="100%" rows="3">{{ $settings['our_partner']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="sofin-stream" class="col-sm-2 col-form-label">Sofin Stream</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="sofin_stream" id="sofin-stream" width="100%" rows="3">{{ $settings['sofin_stream']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="sofin-music" class="col-sm-2 col-form-label">Sofin Music</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="sofin_music" id="sofin-music" width="100%" rows="3">{{ $settings['sofin_music']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="about-us" class="col-sm-2 col-form-label">About us</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="about_us" id="about-us" width="100%" rows="3">{{ $settings['about_us']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="promoting-1" class="col-sm-2 col-form-label">Promoting 1</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="promoting_1" id="promoting-1" width="100%" rows="3">{{ $settings['promoting_1']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="promoting-2" class="col-sm-2 col-form-label">Promoting 2</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="promoting_2" id="promoting-2" width="100%" rows="3">{{ $settings['promoting_2']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="mission" class="col-sm-2 col-form-label">Mission</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="mission" id="mission" width="100%" rows="3">{{ $settings['mission']['value'] }}</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="vision" class="col-sm-2 col-form-label">Vision</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="vision" id="vision" width="100%" rows="3">{{ $settings['vision']['value'] }}</textarea>
                  </div>
                </div>
                <hr>
                <div class="form-group row pr-2">
                  <button type="submit" class="offset-sm-10 col-sm-2 btn btn-primary btn-block btn-flat"><i class="fa fa-check" aria-hidden="true"></i> Lưu thay đổi</button>
                </div>
              </form>
              <form action="{{ route('cms.system.store') }}" method="POST" class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                @csrf
                <div class="form-group row">
                  <label for="blog-wordpress" class="col-sm-2 col-form-label">Blog WordPress</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="blog_wordpress" id="blog-wordpress" placeholder="Blog WordPress" value="{{ $settings['blog_wordpress']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="stream-platform" class="col-sm-2 col-form-label">Stream platform</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stream_platform" id="stream-platform" placeholder="Stream platform" value="{{ $settings['stream_platform']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="{{ $settings['facebook']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="linkedin" class="col-sm-2 col-form-label">LinkedIn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="linkedin" placeholder="LinkedIn" value="{{ $settings['linkedin']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram" value="{{ $settings['instagram']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="{{ $settings['twitter']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="{{ $settings['youtube']['value'] }}">
                  </div>
                </div>
                <hr>
                <div class="form-group row pr-2">
                  <button type="submit" class="offset-sm-10 col-sm-2 btn btn-primary btn-block btn-flat"><i class="fa fa-check" aria-hidden="true"></i> Lưu thay đổi</button>
                </div>
              </form>
              <form action="{{ route('cms.system.store') }}" method="POST" class="tab-pane fade" id="custom-tabs-four-stats" role="tabpanel" aria-labelledby="custom-tabs-four-stats-tab">
                @csrf
                <div class="form-group row">
                  <label for="multi-sector-strategic-partners" class="col-sm-2 col-form-label">Multi-sector strategic partners</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="multi_sector_strategic_partners" id="multi-sector-strategic-partners" placeholder="Multi-sector strategic partners" value="{{ $settings['multi_sector_strategic_partners']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="developing-projects" class="col-sm-2 col-form-label">Developing Projects</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="developing_projects" id="developing-projects" placeholder="Developing Projects" value="{{ $settings['developing_projects']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="hi-speed-servers" class="col-sm-2 col-form-label">Hi-speed Servers</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hi_speed_servers" id="hi-speed-servers" placeholder="Hi-speed Servers" value="{{ $settings['hi_speed_servers']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="employees" class="col-sm-2 col-form-label">Employees</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="employees" name="employees" placeholder="Employees" value="{{ $settings['employees']['value'] }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="years-in-business" class="col-sm-2 col-form-label">Years in Business</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="years_in_business" id="years-in-business" placeholder="Years in Business" value="{{ $settings['years_in_business']['value'] }}">
                  </div>
                </div>
                <hr>
                <div class="form-group row pr-2">
                  <button type="submit" class="offset-sm-10 col-sm-2 btn btn-primary btn-block btn-flat"><i class="fa fa-check" aria-hidden="true"></i> Lưu thay đổi</button>
                </div>
              </form>
              <form action="{{ route('cms.system.store') }}" method="POST" class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                @csrf
                <div class="form-group row">
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $badge = '';
                        if (!empty(old('badge'))) {
                        $badge = old('badge');
                        } elseif (isset($settings) && !empty($settings['badge']['value'])) {
                        $badge = $settings['badge']['value'];
                        }
                        @endphp
                        @if (!empty($badge))
                        <img src="{{ $badge }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if($errors->has('badge'))
                        <div class="text-danger">{{ $errors->first('badge') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Badge</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" data-input-name="badge"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $menu_background = '';
                        if (!empty(old('menu_background'))) {
                        $menu_background = old('menu_background');
                        } elseif (isset($settings) && !empty($settings['menu_background']['value'])) {
                        $menu_background = $settings['menu_background']['value'];
                        }
                        @endphp
                        @if (!empty($menu_background))
                        <img src="{{ $menu_background }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if($errors->has('menu_background'))
                        <div class="text-danger">{{ $errors->first('menu_background') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Menu background</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="menu_background"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $banner_ecosystem = '';
                        if (!empty(old('banner_ecosystem'))) {
                        $banner_ecosystem = old('banner_ecosystem');
                        } elseif (isset($settings) && !empty($settings['banner_ecosystem']['value'])) {
                        $banner_ecosystem = $settings['banner_ecosystem']['value'];
                        }
                        @endphp
                        @if (!empty($banner_ecosystem))
                        <img src="{{ $banner_ecosystem }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if($errors->has('banner_ecosystem'))
                        <div class="text-danger">{{ $errors->first('banner_ecosystem') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Banner Our Ecosystem</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="banner_ecosystem"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $banner_about_us = '';
                        if (!empty(old('banner_about_us'))) {
                        $banner_about_us = old('banner_about_us');
                        } elseif (isset($settings) && !empty($settings['banner_about_us']['value'])) {
                        $banner_about_us = $settings['banner_about_us']['value'];
                        }
                        @endphp
                        @if (!empty($banner_about_us))
                        <img src="{{ $banner_about_us }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if($errors->has('banner_about_us'))
                        <div class="text-danger">{{ $errors->first('banner_about_us') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Banner about us 1</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="banner_about_us"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $banner_about_us_1_img = '';
                        if (!empty(old('banner_about_us_1_img'))) {
                        $banner_about_us_1_img = old('banner_about_us_1_img');
                        } elseif (isset($settings) && !empty($settings['banner_about_us_1_img']['value'])) {
                        $banner_about_us_1_img = $settings['banner_about_us_1_img']['value'];
                        }
                        @endphp
                        @if (!empty($banner_about_us_1_img))
                        <img src="{{ $banner_about_us_1_img }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if($errors->has('banner_about_us_1_img'))
                        <div class="text-danger">{{ $errors->first('banner_about_us_1_img') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Banner about us</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="banner_about_us_1_img"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $banner_about_us_2_img = '';
                        if (!empty(old('banner_about_us_2_img'))) {
                        $banner_about_us_2_img = old('banner_about_us_2_img');
                        } elseif (isset($settings) && !empty($settings['banner_about_us_2_img']['value'])) {
                        $banner_about_us_2_img = $settings['banner_about_us_2_img']['value'];
                        }
                        @endphp
                        @if (!empty($banner_about_us_2_img))
                        <img src="{{ $banner_about_us_2_img }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if($errors->has('banner_about_us_2_img'))
                        <div class="text-danger">{{ $errors->first('banner_about_us_2_img') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Banner about us 2</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="banner_about_us_2_img"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $banner_music = '';
                        if (!empty(old('banner_music'))) {
                        $banner_music = old('banner_music');
                        } elseif (isset($settings) && !empty($settings['banner_music']['value'])) {
                        $banner_music = $settings['banner_music']['value'];
                        }
                        @endphp
                        @if (!empty($banner_music))
                        <img src="{{ $banner_music }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if ($errors->has('banner_music'))
                        <div class="text-danger">{{ $errors->first('banner_music') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Banner music</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="banner_music"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $career_background = '';
                        if (!empty(old('career_background'))) {
                        $career_background = old('career_background');
                        } elseif (isset($settings) && !empty($settings['career_background']['value'])) {
                        $career_background = $settings['career_background']['value'];
                        }
                        @endphp
                        @if (!empty($career_background))
                        <img src="{{ $career_background }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if ($errors->has('career_background'))
                        <div class="text-danger">{{ $errors->first('career_background') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Background tuyển dụng</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="career_background"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                  <div class='col-sm-3'>
                    <div class="card-body lfm-box" style="display: block;">
                      <div class="lfm-holder">
                        @php
                        $blog_background = '';
                        if (!empty(old('blog_background'))) {
                        $blog_background = old('blog_background');
                        } elseif (isset($settings) && !empty($settings['blog_background']['value'])) {
                        $blog_background = $settings['blog_background']['value'];
                        }
                        @endphp
                        @if (!empty($blog_background))
                        <img src="{{ $blog_background }}" class="img-fluid mb-2" alt="white sample" style="width: 100%" />
                        @endif
                        @if($errors->has('blog_background'))
                        <div class="text-danger">{{ $errors->first('blog_background') }}</div>
                        @endif
                      </div>
                      <i class="description text-info">Background blog</i>
                      <button type="button" class="btn btn-secondary btn-block btn-flat lfm" id="addUserButton" data-input-name="blog_background"><i class="fa fa-plus"></i> Chọn ảnh</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group row pr-2">
                  <button type="submit" class="offset-sm-10 col-sm-2 btn btn-primary btn-block btn-flat"><i class="fa fa-check" aria-hidden="true"></i> Lưu thay đổi</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@stop