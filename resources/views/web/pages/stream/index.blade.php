@extends('web.layouts.index')

@section('title', 'SOFIN Network | Stream')

@section('content')
<div class="pt-44 blur-effect" id="hero-panel" style="--image: url({{ $streams[0]->thumbnailUrl() }})">
    <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto rounded-lg relative flex frame--1 aspect-2/1">
        <img src="{{ $streams[0]->thumbnailUrl() }}" class="w-full object-cover rounded-3xl" alt="SoFinNetwork">
    </div>
</div>
<div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 m-auto flex items-center gap-x-10">
    <button class="p-4 rounded-full border-primary border w-fit" id="stream-swiper-prev">
        <img src="{{ asset('assets/icons/polygon-left.svg') }}" alt="SoFinNetwork">
    </button>
    <div class="swiper stream-swiper">
        <div class="swiper-wrapper">
          @foreach ($streams as $stream)
              <div class="swiper-slide">
                <a href="{{ $stream->link }}" target="_blank" rel="noopener noreferrer">
                    <img src="{{ $stream->thumbnailUrl() }}" class="w-full rounded-lg object-cover aspect-video" alt="SoFinNetwork">
                </a>
            </div>
          @endforeach
        </div>
    </div>
    <button class="p-4 rounded-full border-primary border w-fit" id="stream-swiper-next">
        <img src="{{ asset('assets/icons/polygon-right.svg') }}" alt="SoFinNetwork">
    </button>
</div>
<div class="bg--3">
    <div class="max-w-screen-2xl m-auto p-5 mb-40 mt-40 sm:mt-0 sm:p-44 flex flex-col sm:items-center frame--2 aspect-2/1 gap-y-5">
        <img src="{{ asset('assets/images/game-tool.png') }}" class="absolute top-0 sm:top-32 right-0 sm:left-24 " alt="SoFinNetwork">
        <span class="">Start with our</span>
        <h2 class="text-3xl sm:text-5xl text--gradient text-bold mb-16 ">SOFIN STREAM</h2>
        <span class="sm:text-center text-xl ">SOFIN Stream is a platform that allows millions of users from around the world to post, interact and donate directly to each other.</span>
        <span class="sm:text-center text-xl ">Using high-quality interactive technology, audiences can interact with streamers, along with unprecedented access to top streamers in the region.
                                                Join SOFIN Stream now to access the entertainment platform as well as become a content creator, earn money and more!</span>
        <a href="https://stream.sofinnetwork.com/" target="_blank" class="bg-gradient--primary text-center sm:text-left mt-20 px-5 sm:px-16 text-xl py-4 sm:py-5 mb-20 rounded-full text-text--light z-10">Register to be our Streamer</a>
    </div>
</div>
@stop
