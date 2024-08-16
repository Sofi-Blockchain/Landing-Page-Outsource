@extends('web.layouts.index')

@section('title', 'SOFIN Network | Let\'s talk')

@section('content')
<div class="w-full bg--9 py-44" style="--bg9: url({{ asset($s['blog_background']) }})">
    <div class="max-w-screen-2xl m-auto flex flex-col items-center gap-y-20">
        <span class="text-3xl sm:text-7xl leading-loose text--gradient py-20">Welcome to our Blogs</span>
    </div>
</div>

<section class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 m-auto items-center flex flex-col py-20 sm:py-44 overflow-hidden">
    <span class="text-2xl sm:text-5xl text-bold">Our Business Field</span>
    <div class="max-w-screen-2xl h-full w-full m-auto py-10 sm:py-20 relative flex sm:justify-center items-center gap-x-5 sm:gap-x-10 overflow-auto">
        <div class="flex items-center justify-center text-sm sm:text-base py-2 gap-x-5 bg-gradient--primary sm:py-4 px-4 sm:px-8 text-text--light full-border rounded-lg tab-button" data-tab="#tab-all">
            <span class="whitespace-nowrap">All fields</span>
        </div>
        @foreach (\App\Models\Blog::CATEGORY_NAMES as $k => $v)
          <div div class="flex items-center justify-center text-sm sm:text-base py-2 gap-x-5 bg-bg--light dark:bg-secondary sm:py-4 px-4 sm:px-8 text-text--light full-border dark:text-text--dark rounded-lg tab-button" data-tab="#tab-{{ $k }}">
              {!! config($v['icon']) !!}
              <span class="whitespace-nowrap">{{ \App\Models\Blog::categoryLabel($k) }}</span>
          </div>
        @endforeach
    </div>

    @foreach ($blogByCategory as $key => $group)
        <div class="flex flex-col w-full gap-y-20 tab-content relative h-full {{ $key !== 'all' ? 'swiper-hide' : '' }}" id="tab-{{ $key }}">
          @foreach ($group as $blog)
              <div class="flex flex-col sm:flex-row">
                  <img src="{{ $blog->thumbnailUrl() }}" class="w-full sm:w-4/12 aspect-video object-cover rounded-3xl mb-5" alt="SoFinNetwork">
                  <div class="flex flex-col sm:pl-20 gap-y-5">
                      <a href="{{ $blog->detailUrl() }}" target="_blank" class="text-xl sm:text-2xl">{{ $blog->name() }}</a>
                      <div class="flex items-center justify-between border-b">
                          <p class="pr-10 text-sm sm:text-base">{{ $blog->description() }}</p>
                          <img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="SoFinNetwork">
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
    @endforeach
    <a href="https://flipboarddaily.online/" target="_blank" class="flex items-center justify-center gap-x-5 bg-gradient--primary mt-44 py-4 px-8 text-text--light rounded-lg" data-tab="#tab-all">
        <span>Show more</span>
    </a>
</section>
@stop
