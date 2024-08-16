@extends('web.layouts.index')

@section('title', 'SOFIN Network | Music')

@section('content')
<div class="pt-44 bg--4" style="--bg4: url({{ asset($s['banner_music']) }})">
    <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto pt-5 pb-60 relative flex flex-col">
        <span data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="200">Feel the beat with</span>
        <h2 class="text-5xl text--gradient text-bold " data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="200" data-aos-delay="200">SOFIN MUSIC</h2>
        <a href="https://zweartmusic.ca/" target="_blank" class="w-fit bg-gradient--primary mt-10 px-5 sm:px-16 text-xl py-3 sm:py-5 rounded-full text-text--light " data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="300">Learn more</a>
    </div>
</div>

<div class="flex flex-col items-center max-w-screen-2xl h-full m-auto px-5 sm:px-44 py-20 gap-y-5 bg-bg--light dark:bg-black-light relative mt-44 rounded-3xl shadow">
    <img src="{{ asset('assets/images/audio-tool.png') }}" class="absolute top-0 left-1/2 translate-y-x1/2 translate-x-x1/2" alt="SoFinNetwork">
    <p class="text-center text-xl " data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="300">With SOFIN Music as a music and podcast app, you can stream millions of songs, albums and original podcasts anytime, anywhere!</p>
    <p class="text-center text-xl " data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="400">At SOFIN Music, we provide a music and podcast listening platform where you can explore a treasure trove of playlists and become a fellow creator on the platform to satisfy your passion and earn money.</p>
    <a href="https://zweartmusic.ca/" target="_blank" class="w-fit bg-gradient--primary mt-10 px-16 text-xl py-5 rounded-full text-text--light " data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="500">Fill your own playlist</a>
</div>
<div class="bg--3 pb-20 sm:pb-44 2xl:px-0 px-5 sm:px-10 mt-10">
    <div class="max-w-screen-2xl bg-light-second dark:bg-black-light relative sm:mt-44 rounded-3xl flex flex-col m-auto p-5 sm:p-10 shadow">
        <div class="flex justify-between items-center mb-5 sm:px-5">
            <h2>TOP Trending Music</h2>
            <div class="flex gap-x-5">
                <div id="trending-swiper-prev" class="rounded-full w-10 sm:w-14 h-10 sm:h-14 flex items-center justify-center bg-bg--light dark:bg-white-transparent shadow">{!! config('svg.arrow-left') !!}</div>
                <div id="trending-swiper-next" class="rounded-full w-10 sm:w-14 h-10 sm:h-14 flex items-center justify-center bg-bg--light dark:bg-white-transparent shadow">{!! config('svg.arrow-right') !!}</div>
            </div>
        </div>
        <div class="swiper trending-swiper w-full">
            <div class="swiper-wrapper">
              @for ($i = 0; $i < sizeof($musics); $i+=2)
                  <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                      @isset($musics[$i])
                      <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                        <img src="{{ $musics[$i]->image() }}" alt="SoFinNetwork">
                        <span class="text-sm sm:text-xl text-bold">{{ $musics[$i]->name() }}</span>
                        <p class="text-sm sm:text-base">{{ $musics[$i]->author() }}</p>
                      </div>
                      @endisset
                      @isset($musics[$i+1])
                      <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                          <img src="{{ $musics[$i + 1]->image() }}" alt="SoFinNetwork">
                          <span class="text-sm sm:text-xl text-bold">{{ $musics[$i + 1]->name() }}</span>
                          <p class="text-sm sm:text-base">{{ $musics[$i + 1]->author() }}</p>
                      </div>
                      @endisset
                    </div>
                </div>
              @endfor
                {{-- <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/hat.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">Good Vibes</span>
                            <p class="text-sm sm:text-base">The Weekend</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/db2t.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">À Lôi</span>
                            <p class="text-sm sm:text-base">Double2T</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/hb.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/tlinh.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/pmq.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">Good Vibes</span>
                            <p class="text-sm sm:text-base">The Weekend</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/mtp.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/hb-2.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">Good Vibes</span>
                            <p class="text-sm sm:text-base">The Weekend</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/den.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/hat.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">Good Vibes</span>
                            <p class="text-sm sm:text-base">The Weekend</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/db2t.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">À Lôi</span>
                            <p class="text-sm sm:text-base">Double2T</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/hb.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/tlinh.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/pmq.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">Good Vibes</span>
                            <p class="text-sm sm:text-base">The Weekend</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/mtp.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex sm:flex-col">
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/hb-2.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">Good Vibes</span>
                            <p class="text-sm sm:text-base">The Weekend</p>
                        </div>
                        <div class="flex flex-col gap-y-2 p-2 sm:p-5 delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">
                            <img src="{{ asset('assets/images/idols/den.png') }}" alt="SoFinNetwork">
                            <span class="text-sm sm:text-xl text-bold">TOP Trending Music</span>
                            <p class="text-sm sm:text-base">TOP Trending Music</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@stop
