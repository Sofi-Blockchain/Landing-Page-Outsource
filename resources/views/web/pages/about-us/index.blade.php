@extends('web.layouts.index')

@section('title', 'SOFIN Network | About Us')

@section('content')
<div class="w-full sm:h-200 sm:rounded-bl-9xl overflow-hidden">
    <video muted loop autoplay playsinline class="w-full">
    <source src="{{ asset('assets/videos/about-us.mp4') }}" type="video/mp4">
    <source src="{{ asset('assets/videos/about-us.webm') }}" type="video/mp4">
    <source src="{{ asset('assets/videos/about-us.ogv') }}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
</div>

<div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 m-auto flex items-center gap-x-10 flex-col mt-20 sm:mt-44 gap-y-5 sm:gap-y-20">
    <h1 class="text--gradient text-3xl sn:text-7xl text-bold" data-aos="fade-up" data-aos-duration="800">
        <img src="{{ asset('/assets/images/sofin-full-logo.png') }}" class="w-auto h-20" alt="SoFin Network">
    </h1>
    <p class="text-bold text-center sm:text-left text-3xl sm:text-3xl" data-aos="fade-up" data-aos-duration="800">An Integrated AI Social Media Technology Company</p>
    <div class="flex items-center p-2 bg-light-second dark:bg-white rounded-full gap-x-2" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
        <div class="hidden sm:block py-1 px-2 rounded-full bg-gradient--primary"><img src="{{ asset('assets/icons/award.svg') }}" alt="Network"></div>
        <span class="text-text--light pr-4 text-sm sm:taxt-base p-1 text-center">Process optimization, user experience & revenue generation</span>
    </div>
    <p class="text-center sm:text-left" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">For the past several years, we have helped music and entertainment businesses create their brand presence and achieve their revenue goals.</p>
</div>

<div class="bg--5 pt-20 mt-20 sm:mt-44" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
    <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 m-auto flex items-center gap-x-10 flex-col gap-y-20 z-10 relative">
        <div class="flex justify-between max-w-screen-xl flex-col sm:flex-row gap-y-5 sm:gap-y-0 text-text--dark">
            <h3 class="text-2xl sm:text-3xl w-full sm:w-2/5">Promoting a creativity culture.<br>Bringing motivation for new investments.</h3>
            <span class="w-full sm:w-2/5">We constantly welcome changes in technology, thereby providing optimal solutions for each activity and project, especially in the field of creation and application of AI to improve data mining efficiency.</span>
        </div>
        <div class="relative w-full">
            <img class="absolute right-0 -top-1/3 sm:top-0 2xl:right-0 translate-x-1/2 translate-y-x1/2 auto-spin" src="{{ asset('assets/images/circle-pin.png') }}" alt="SoFinNetwork">
            <img class="w-full p-0 sm:p-10" src="{{ $s['banner_about_us'] }}" alt="SoFinNetwork">
        </div>
    </div>
</div>

<div class="flex flex-col items-center mt-20 sm:mt-44 px-5">
    <h2 class="text-5xl text-bold" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">Mission & Vision</h2>
    <div class="flex justify-center gap-x-20 mt-20 flex-col sm:flex-row gap-y-5">
        <div class="flex flex-col max-w-md gap-y-10 items-center bg-bg--light shadow dark:bg-secondary py-20 px-5 sm:px-10 rounded-3xl" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
            <img src="{{ asset('assets/images/c-white.png') }}" class="w-28 h-28" alt="SoFinNetwork">
            <span class="text-3xl">Mission</span>
            <p class="text-center">We provide a suite of innovative AI and Web3 platforms to enhance and monetize social media presence, aiming to revolutionize the music and entertainment industry while unleashing the immense potential of sustainable growth with online revenues for individuals and businesses.</p>
        </div>
        <div class="flex flex-col max-w-md gap-y-10 items-center bg-bg--light shadow dark:bg-secondary py-20 px-5 sm:px-10 rounded-3xl" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
            <img src="{{ asset('assets/images/c-orange.png') }}" class="w-28 h-28" alt="SoFinNetwork">
            <span class="text-3xl">Vision</span>
            <p class="text-center">We pioneer the applications of advanced technologies to support online resource exploitation with a passion to architect sustainable growth and speedily unlock the full potential of new brands, new ecosystems, and emerging visionaries around the world.</p>
        </div>
    </div>
</div>

<div class="bg--6 px-5 py-20 sm:px-20 mt-20 sm:mt-44" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" style="--bg6: url({{ asset($s['banner_about_us_1_img']) }})">
    <div class="max-w-screen-xl 2xl:px-0 px-5 sm:px-10 m-auto flex items-center flex-col gap-y-5 sm:gap-y-10">
        <h1 class="text-xl sm:text-3xl text-center">Creating a digital revolution for the future of social media, putting our partners' benefits first,
and generating sustainable revenue while developing a meaningful ecosystem for the betterment of our global society.</h1>
        <a href="{{ route('letsTalk') }}" class="bg-gradient--primary px-5 sm:px-16 text-sm sm:text-xl py-5 rounded-lg text-text--light ">Let's talk</a>
    </div>
</div>

<div class="flex items-center flex-col w-full my-20 sm:my-44 bg--8">
    <span class="text-2xl sm:text-5xl mb-10 sm:mb-32">Follow our <span class="text-primary">history milestones</span></span>
    <div class="swiper milestone-swiper w-full">
        <div class="swiper-wrapper">
          @foreach ($milestones as $milestone)
              <div class="swiper-slide">
                <div class="flex flex-col items-center justify-center gap-y-20">
                    <span class="text-9xl">{{ $milestone->year }}</span>
                    <img class="w-full" src="{{ asset('assets/images/time-ruler.png') }}" alt="SoFinNetwork">
                    <span class="text-sm sm:text-xl max-w-screen-lg 2xl:px-0 px-5 sm:px-10 text-center">{{ $milestone->description() }}</span>
                </div>
            </div>
          @endforeach
        </div>
    </div>
    <div class="flex mt-5 sm:mt-20 gap-x-10">
        <div id="milestone-swiper-prev" class="rounded-full w-14 h-14 flex items-center justify-center bg-bg--light dark:white-transparent shadow darkbg-white-transparent">{!! config('svg.arrow-left') !!}</div>
        <div id="milestone-swiper-next" class="rounded-full w-14 h-14 flex items-center justify-center bg-bg--light dark:white-transparent shadow darkbg-white-transparent">{!! config('svg.arrow-right') !!}</div>
    </div>

    <div class="max-w-screen-2xl m-auto bg--7 flex justify-between items-center px-5 sm:px-32 py-10 sm:py-20 mt-44 flex-col-reverse sm:flex-row gap-y-10" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" style="--bg7: url({{ asset($s['banner_about_us_2_img']) }})">
        <span class="text-xl sm:text-5xl text-bold w-full sm:w-3/5 text-center sm:text-start text-text--dark">We believe that the human factor is the key to success.</span>
        <img class="w-full sm:w-80 h-20 sm:h-80 object-contain" src="{{ asset('assets/images/sofin-full-logo.png') }}" alt="SoFinNetwork">
    </div>
</div>

{{-- <div class="bg-bg--light py-44">
    <div class="max-w-screen-2xl m-auto flex flex-col">
        <span class="text-5xl text-text--light text-bold">Board of Directors</span>
        <ul class="flex gap-x-10 text-text--light my-20">
            <li class="border rounded-lg p-4">All</li>
            <li class="border rounded-lg p-4">Manager</li>
            <li class="border rounded-lg p-4">Product Design</li>
            <li class="border rounded-lg p-4">Content</li>
            <li class="border rounded-lg p-4">Content</li>
            <li class="border rounded-lg p-4">Content</li>
        </ul>
        <div class="flex flex-wrap justify-between gap-y-20">
            <div class="w-30">
                <img src="{{ asset('assets/images/idols/g3.png') }}" class="w-full radius--1" alt="SoFinNetwork">
                <div class="flex flex-col p-4 bg-bg--light -mt-20 relative z-10 mx-5 radius--1 shadow">
                    <span class="text-text--light text-bold text-2xl">ElinorB Sanchez</span>
                    <div class="flex items-center gap-x-2 justify-between">
                        <div class="flex text-text--light flex-col">
                            <span>Job Position</span>
                            <p>Product Design</p>
                        </div>
                        <a href="#" class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light">Read more</a>
                    </div>
                </div>
            </div>
            <div class="w-30">
                <img src="{{ asset('assets/images/idols/b1.png') }}" class="w-full radius--1" alt="SoFinNetwork">
                <div class="flex flex-col p-4 bg-bg--light -mt-20 relative z-10 mx-5 radius--1 shadow">
                    <span class="text-text--light text-bold text-2xl">ElinorB Sanchez</span>
                    <div class="flex items-center gap-x-2 justify-between">
                        <div class="flex text-text--light flex-col">
                            <span>Job Position</span>
                            <p>Product Design</p>
                        </div>
                        <a href="#" class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light">Read more</a>
                    </div>
                </div>
            </div>
            <div class="w-30">
                <img src="{{ asset('assets/images/idols/g2.png') }}" class="w-full radius--1" alt="SoFinNetwork">
                <div class="flex flex-col p-4 bg-bg--light -mt-20 relative z-10 mx-5 radius--1 shadow">
                    <span class="text-text--light text-bold text-2xl">ElinorB Sanchez</span>
                    <div class="flex items-center gap-x-2 justify-between">
                        <div class="flex text-text--light flex-col">
                            <span>Job Position</span>
                            <p>Product Design</p>
                        </div>
                        <a href="#" class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light">Read more</a>
                    </div>
                </div>
            </div>
            <div class="w-30">
                <img src="{{ asset('assets/images/idols/b2.png') }}" class="w-full radius--1" alt="SoFinNetwork">
                <div class="flex flex-col p-4 bg-bg--light -mt-20 relative z-10 mx-5 radius--1 shadow">
                    <span class="text-text--light text-bold text-2xl">ElinorB Sanchez</span>
                    <div class="flex items-center gap-x-2 justify-between">
                        <div class="flex text-text--light flex-col">
                            <span>Job Position</span>
                            <p>Product Design</p>
                        </div>
                        <a href="#" class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light">Read more</a>
                    </div>
                </div>
            </div>
            <div class="w-30">
                <img src="{{ asset('assets/images/idols/g1.png') }}" class="w-full radius--1" alt="SoFinNetwork">
                <div class="flex flex-col p-4 bg-bg--light -mt-20 relative z-10 mx-5 radius--1 shadow">
                    <span class="text-text--light text-bold text-2xl">ElinorB Sanchez</span>
                    <div class="flex items-center gap-x-2 justify-between">
                        <div class="flex text-text--light flex-col">
                            <span>Job Position</span>
                            <p>Product Design</p>
                        </div>
                        <a href="#" class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light">Read more</a>
                    </div>
                </div>
            </div>
            <div class="w-30">
                <img src="{{ asset('assets/images/idols/b3.png') }}" class="w-full radius--1" alt="SoFinNetwork">
                <div class="flex flex-col p-4 bg-bg--light -mt-20 relative z-10 mx-5 radius--1 shadow">
                    <span class="text-text--light text-bold text-2xl">ElinorB Sanchez</span>
                    <div class="flex items-center gap-x-2 justify-between">
                        <div class="flex text-text--light flex-col">
                            <span>Job Position</span>
                            <p>Product Design</p>
                        </div>
                        <a href="#" class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@stop
