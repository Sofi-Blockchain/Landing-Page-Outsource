@extends('web.layouts.index')

@section('title', 'SOFIN Network')

@section('content')
<div id="home">
    <section class="hero v-screen h-screen text-text--dark">
        <video muted loop autoplay playsinline class="w-full absolute h-full z--1 object-cover">
            <source src="{{ asset('assets/videos/bg-sofin.mp4') }}" type="video/mp4">
            <source src="{{ asset('assets/videos/bg-sofin.webm') }}" type="video/webm">
            <source src="{{ asset('assets/videos/bg-sofin.mov') }}" type="video/mov">
            <source src="{{ asset('assets/videos/bg-sofin.ogv') }}" type="video/ogv">
            Your browser does not support the video tag.
        </video>
        <div class="max-w-screen-2xl h-full m-auto px-5 sm:px-0 py-5 sm:py-20 z-10 relative flex items-center flex-col justify-center sm:justify-between">
            <div class="flex items-center gap-x-10 mb-10" data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="500" data-aos-delay="1000">
                <img src="{{ asset('/assets/images/sofin-full-logo.png') }}" class="w-auto h-20" alt="SoFin Network">
            </div>
            <div class="flex flex-col items-center w-full">
                <div class="positivity__words w-full" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="1200">
                    <h2 class="change text-center heading text-base sm:text-5xl leading-loose">BUILD YOUR BRAND VOICE FOR SUCCESS</h2>
                    <h2 class="change text-center heading text-base sm:text-5xl leading-loose">SPEED AI SOCIAL MEDIA SOLUTIONS</h2>
                    <h2 class="change text-center heading text-base sm:text-5xl leading-loose">HUMAN AND TECHNOLOGICAL FUSION</h2>
                    <h2 class="change text-center heading text-base sm:text-5xl leading-loose">BRING THE WORLD CLOSER TOGETHER</h2>
                </div>
                <span class="text-sm sm:text-2xl mt-5" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="800">#Regenerative AI #Technology #Social #Entertainment</span>
                <a href="{{ route('aboutUs') }}" class="bg-gradient--primary mt-10 sm:mt-20 px-5 sm:px-16 text-xl py-3 sm:py-5 rounded-full text-text--light " data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="900">Learn more</a>
            </div>
            <p class="max-w-screen-md mt-10 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" data-aos-delay="900">
                A digital transformation of the technology & entertainment ecosystem which integrates Big Data, AI, Web3 products, and global connections with social network platform expansion.
            </p>
            <div class="header__hambuger h-14 w-14 rounded-full off-canvas-toggle absolute top-5 sm:top-20 left-5 sm:left-20 2xl:left-0" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="700"></div>
            <ul class="absolute top-5 sm:top-20 right-5 sm:right-20 2xl:right-0 gap-y-5 hidden sm:flex flex-col items-end" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="700">
                <li><a href="{{ route('stream') }}">S-STREAM</a></li>
                <li><a href="{{ route('music') }}">MUSIC</a></li>
                <li><a href="{{ route('aboutUs') }}">ABOUT US</a></li>
                <li><a href="{{ route('letsTalk') }}">LET'S TALK</a></li>
                <li><a href="{{ route('career') }}">CAREERS</a></li>
                <li><a href="{{ route('blog') }}">BLOG</a></li>
            </ul>
            <img src="{{ $s['badge'] }}" class="auto-spin absolute hidden sm:block left-5 sm:left-20 2xl:left-0 bottom-20" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" data-aos-delay="900" alt="SoFinNetwork">
            <ul class="hidden absolute translate-x-1/2 sm:translate-x-0 bottom-20 sm:right-20 2xl:right-0 sm:flex gap-x-5" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" data-aos-delay="300">
                <li><a href="{{ route('switchLanguage', ['language' => 'en']) }}" class="text-xl ui-opt {{ app()->getLocale() == config('theme.language')[0] ? 'lang--active' : ''}}">EN</a></li>
                <li><a href="{{ route('switchLanguage', ['language' => 'vi']) }}" class="text-xl ui-opt {{ app()->getLocale() == config('theme.language')[1] ? 'lang--active' : ''}}">VN</a></li>
                <li><a href="{{ route('switchMode', ['mode' => config('theme.mode')[0]]) }}" class="text-xl ui-opt {{ session()->get('mode') == config('theme.mode')[0] ? 'mode--active' : '' }}">{!! config('svg.moon') !!}</a></li>
                <li><a href="{{ route('switchMode', ['mode' => config('theme.mode')[1]]) }}" class="text-xl ui-opt {{ session()->get('mode') == config('theme.mode')[1] ? 'mode--active' : '' }}">{!! config('svg.sun') !!}</a></li>
            </ul>
        </div>
    </section>

    {{-- Section statistic --}}
    <section id="show-header">
        <div class="max-w-screen-2xl h-full m-auto px-5 2xl:px-0 sm:px-10 py-10 sm:py-20 relative flex justify-center gap-x-5 sm:gap-x-20">
            <div class="flex flex-col flex-1 items-center h-full">
                <span class="text-3xl sm:text-7xl dark:text-text--dark text-text--light font-semibold"><span class="a-num" data-to="20">0</span><span class="text-primary">+</span></span>
                <p class="text-xs sm:text-xl text-center">Multi-sector strategic partners</p>
            </div>
            <div class="flex flex-col flex-1 items-center h-full">
                <span class="text-3xl sm:text-7xl dark:text-text--dark text-text--light font-semibold"><span class="a-num" data-to="15">0</span><span class="text-primary">+</span></span>
                <div class="text-xs sm:text-xl text-center break-keep sm:flex">Developing&nbsp;<p>Projects</p></div>
            </div>
            <div class="flex flex-col flex-1 items-center h-full">
                <span class="text-3xl sm:text-7xl dark:text-text--dark text-text--light font-semibold"><span class="a-num" data-to="3">0</span><span class="text-primary">K+</span></span>
                <div class="text-xs sm:text-xl text-center break-keep sm:flex">Hi-speed&nbsp;<p>Servers</p></div>
            </div>
        </div>
    </section>

    {{-- Section Story --}}
    <section id="story-container">
        <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto py-10 sm:py-20 flex flex-col sm:flex-row">
            <div class="flex flex-col w-full sm:w-2/5 pr-0 sm:pr-44" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" data-aos-delay="300">
                <h3 class="text-3xl uppercase">Passion Drives<br>Our Development</h3>
                <div class="tab-content flex-col overflow-hidden justify-between h-full" id="tab-content-0">
                    <h3 class="text-bold text-xl sm:mt-5">Music</h3>
                    <p class="flex-1">STRATEGIC COOPERATION PRODUCT WITH SOFIN NETWORK. Congratulations to the  #1 Hit Vietnamese Singer Tang Duy Tan having succeeded bringing the comeback product "Cat Doi Noi Sau" into the World Music Chart and officially became one of the first Vietnamese artists who has the most Vietnamese songs reaching out to the world via SOFIN AI ads engine.</p>
                </div>
                <div class="tab-content flex-col overflow-hidden justify-between h-full swiper-hide" id="tab-content-1">
                    <h3 class="text-bold text-xl sm:mt-5">Farm Me</h3>
                    <p class="flex-1">We created FARM Me. It is a fantasy metaverse game exploring all aspects of "Play, Connect, Experience, Earn" for multiplayer to experience wholeset of the first immersive farm game with a battle-to-survive element and expanded NFT Metaverse world of 9 Clouds World.
                    </p>
                </div>
                <div class="tab-content flex-col overflow-hidden justify-between h-full swiper-hide" id="tab-content-2">
                    <h3 class="text-bold text-xl sm:mt-5">SOFIN Network</h3>
                    <p class="flex-1">Say hi! — we’ are SOFIN Network.<br>
                      We ’re SOFIN Network. We ’ve created next-generation AI technologies for online creativity via global collaborations with content creators to achieve an optimal level of sustainable revenue generation.</p>
                </div>
                <div class="tab-content flex-col overflow-hidden justify-between h-full swiper-hide" id="tab-content-3">
                    <h3 class="text-bold text-xl sm:mt-5">SOFIN Foundation</h3>
                    <p class="flex-1">The integrated system of AI and Web3 for the future Social platforms. #Social #Web3 #AI</p>
                </div>
                <div class="flex gap-x-5 py-5 sm:py-0 justify-end sm:justify-start">
                    <div id="story-swiper-prev" class="rounded-full w-14 h-14 flex items-center justify-center bg-bg--light dark:bg-white-transparent shadow">{!! config('svg.arrow-left') !!}</div>
                    <div id="story-swiper-next" class="rounded-full w-14 h-14 flex items-center justify-center bg-bg--light dark:bg-white-transparent shadow">{!! config('svg.arrow-right') !!}</div>
                </div>
            </div>
            <div class="story-swiper swiper w-full sm:w-3/5"  data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" data-aos-delay="300">
                <div class="swiper-wrapper">
                    <div class="swiper-slide modal-toggle" data-modal="#modal" data-content="#tab-content-0" loading="lazy">
                        <div class="slide-overlay slide-overlay--active"></div>
                        <img class="w-full" src="{{ asset('assets/images/stories/cdnsthumb.png') }}" alt="SoFinNetwork"/>
                    </div>
                    <div class="swiper-slide modal-toggle" data-modal="#modal1" data-content="#tab-content-1" loading="lazy">
                        <div class="slide-overlay"></div>
                        <img class="w-full" src="{{ asset('assets/images/stories/embed.png') }}" alt="SoFinNetwork"/>
                    </div>
                    <div class="swiper-slide modal-toggle" data-modal="#modal2" data-content="#tab-content-2" loading="lazy">
                        <div class="slide-overlay"></div>
                        <img class="w-full" src="{{ asset('assets/images/stories/video1.png') }}" alt="SoFinNetwork"/>
                    </div>
                    <div class="swiper-slide modal-toggle" data-modal="#modal3" data-content="#tab-content-3" loading="lazy">
                        <div class="slide-overlay"></div>
                        <img class="w-full" src="{{ asset('assets/images/stories/video2.png') }}" alt="SoFinNetwork"/>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-2xl 2xl:px-0 px-5 flex-col sm:px-10 h-full m-auto py-5 sm:py-20 relative flex gap-x-20">
        <span class="text-2xl sm:text-3xl mb-5">Our Economic Standards</span>
        <ul class="gap-y-5 flex flex-col">
            <li>Joining hands to create <span class="text-primary">sustainable values</span> globally.</li>
            <li>Solving problems of jobs and labor resources <span class="text-primary"> (SDG) </span> for sustainable development.</li>
            <li>Identifying factors supporting environmental, social & corporate governance <span class="text-primary">(ESG)</span> compliance.</li>
        </ul>
    </section>

    <section class="bg--1">
        <div class="max-w-screen-2xl h-full 2xl:px-0 px-5 sm:px-10 m-auto py-10 sm:py-20 relative flex flex-col gap-x-20">
            <span class="text-2xl sm:text-3xl mb-5">Our Culture</span>
            <p class="w-full sm:w-8/12 leading-tight">We value personal growth, thereby promoting team growth. Comprised of a united and professional team sharing the same vision and ethics, we stand firm against any challenges with perserverance.</p>
        </div>
        <marquee scrollamount="20" behavior="scroll" direction="left" class="text-5xl sm:text-9xl py-10 sm:py-20 text-primary">Bring the world closer together.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bring the world closer together. Bring the world closer together.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bring the world closer together. Bring the world closer together.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bring the world closer together. Bring the world closer together.</marquee>
    </section>

    {{-- Our ecosystem --}}
    <section class="bg--2 w-full" style="--bg2: url({{ asset($s['banner_ecosystem']) }})">
        <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto py-10 sm:py-20 relative flex flex-col justify-center items-center gap-y-10 text-text--dark">
            <span class="text-3xl sm:text-7xl delay-[200ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">Our Ecosystem</span>
            <p class="text-center max-w-3xl">
                We believe that a business with effective AI tools can make an impact globally.
                <br>Take the first step to contact us, and together, we will reach your company's goals.
            </p>
        </div>
    </section>

    <div class="dark:bg-black-light bg-light-second py-5 sm:py-20" id="ecosystem-section">
        <section class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto py-10 sm:py-20 relative flex justify-start sm:justify-center items-center gap-x-5 sm:gap-x-10 overflow-auto mb-5">
            <div class="flex whitespace-nowrap items-center justify-center gap-x-5 text-sm sm:text-base bg-gradient--primary dark:bg-secondary bg-bg--light py-2 px-4 sm:py-4 sm:px-8 dark:text-text--light text-text--dark rounded-lg tab-button cursor-pointer" data-tab="#tab-ecosystem-all">
                {!! config('svg.archive') !!}
                <span>All fields</span>
            </div>
            @foreach (\App\Models\Ecosystem::CATEGORY_NAMES as $key => $category)
            <div class="flex items-center justify-center gap-x-5 text-sm sm:text-base dark:bg-secondary bg-bg--light py-2 px-4 sm:py-4 sm:px-8 dark:text-text--dark text-text--light rounded-lg tab-button cursor-pointer" data-tab="#tab-ecosystem-{{ $key }}">
                {!! config($category['icon']) !!}
                <span>{{ \App\Models\Ecosystem::categoryLabel($key) }}</span>
            </div>
            @endforeach
        </section>
        @foreach($ecosystemsByCategory as $key => $group)
        @php
            $hide = 'swiper-hide';
            switch ($key) {
              case App\Models\Ecosystem::CATEGORY_1:
                $swiperClass = 'entertainment-swiper';
                break;

              case App\Models\Ecosystem::CATEGORY_2:
                $swiperClass = 'investment-swiper';
                break;

              case App\Models\Ecosystem::CATEGORY_3:
                $swiperClass = 'operation-swiper';
                break;

              case App\Models\Ecosystem::CATEGORY_4:
                $swiperClass = 'technology-swiper';
                break;

              case 'all':
                $swiperClass = 'all-swiper';
                $hide = '';
                break;

              default:
                $swiperClass = '';
                break;
            }
        @endphp
        @if ($key === App\Models\Ecosystem::CATEGORY_4)
          <section class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto relative tab-content {{ $hide }}" id="tab-ecosystem-{{ $key }}">
            <div class="flex justify-between flex-col sm:flex-row">
                <div class="flex flex-col justify-between w-full sm:w-7/12 gap-y-5">
                  @foreach($group as $ecosystem)
                    <div>
                        <span class="text-primary text-2xl">{{ $ecosystem->name() }}</span>
                        <p>{{ $ecosystem->description() }}</p>
                    </div>
                  @endforeach
                </div>
                <div class="w-full sm:w-5/12 mt-10 sm:mt-0">
                    <img class="w-full" src="{{asset('assets/images/ecotech.png')}}" alt="SoFinNetwork">
                </div>
            </div>
        </section>
        @else
          <section class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto relative tab-content {{ $hide }}" id="tab-ecosystem-{{ $key }}">
            <div class="{{ $swiperClass }} swiper ">
                <div class="swiper-wrapper">
                  @foreach($group as $ecosystem)
                    <div class="swiper-slide overflow-hidden">
                        <img src="{{ $ecosystem->image() }}" class="w-full radius--1" alt="SoFinNetwork">
                        <div class="flex flex-col p-4 bg-bg--light dark:bg-bg--dark -mt-8 relative z-10 m-5 radius--1 shadow">
                            <div class="flex items-center gap-x-2">
                                <div class="w-12 h-12 bg-bg--light flex items-center shadow justify-center rounded-full p-2">
                                    <img src="{{ optional($ecosystem->partner)->logo }}" class="w-full h-full object-contain" alt="SoFinNetwork">
                                </div>
                                <span class="text-xl">{{ $ecosystem->name() }}</span>
                            </div>
                            <span class="mt-2 ecosystem-detail text-text--light dark:text-text--dark">{{ $ecosystem->description() }}</span>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
        @endif
        @endforeach
    </div>

    <section class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto mt-40">
        <div class="flex flex-col sm:flex-row justify-between items-center bg-gradient--primary rounded-lg p-5 sm:p-20">
            <div class="w-full sm:w-9/12 arrow-decor">
                <h2 class="text-3xl sm:text-5xl text-text--light font-bold delay-[200ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">Looking for a reliable partnership?</h2>
                <p class="text-text--light text-lg mt-10 delay-[250ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">We have a large-scale groups to support each other in our partnerships. Join us to get our latest news and follow our latest announcements!</p>
            </div>
            <a href="{{ route('letsTalk') }}#form-fill" class="rounded-lg bg-bg--dark text-text--dark flex py-5 mt-5 sm:mt-0 px-10 w-fit h-fit delay-[300ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">Contact Us</a>
        </div>
    </section>

    <section class="bg--8 overflow-hidden sm:h-screen">
        <div class="sm:planet-circle max-w-screen-2xl h-full aspect-square m-auto flex justify-center items-center px-5 sm:px-0">
            <div class="orbit flex flex-col sm:flex-row mt-10 sm:mt-0 justify-center items-center w-full relative">
                <div class="flex gap-y-10 flex-col items-center justify-center sm:absolute top-0 right-0 bottom-0 left-0">
                    <h1 class="text-5xl">Our Partners</h1>
                    <p class="max-w-screen-md text-center">We have a large scale group to support each other in this game, Join us to get the news as soon as possible and follow our latest announcements.</p>
                </div>
                <div class="flex overflow-auto sm:block mt-10 sm:mt-0 gap-x-10 sm:gap-x-0 w-full h-28 sm:h-auto">
                  @foreach ($partnersByGroup as $key => $partners)
                    <div class="sm:absolute sm:top-1/2 sm:left-1/2 z-10 sm:translate-x-x1/2 sm:translate-y-x1/2 w-fit">
                        <ul class="flex gap-x-10 sm:gap-x-0 sm:block a-circle a-circle--{{ $key + 1 }}">
                          @for($i = 0; $i < 5; $i++)
                              @if($i % 2 !== 0 && isset($partners[$i/2]))
                                  <li class="w-20 h-20 aspect-square sm:bg-gradient--primary">
                                      <img class="w-full h-full object-contain dark-hidden" src="{{ $partners[$i/2]['logo_dark'] }}">
                                      <img class="w-full h-full object-contain light-hidden" src="{{$partners[$i/2]['logo'] }}">
                                  </li>
                              @else
                              <li class="bg-bg--light point hidden sm:block"></li>
                              @endif
                          @endfor
                        </ul>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-bg--light flex items-center">
        <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto py-10 sm:py-20 mt-10 sm:mt-40 flex flex-col sm:flex-row">
          <div class="flex flex-col text-text--light w-full sm:w-5/12 mb-12 sm:mb-0">
            <h1 class="text-5xl font-bold" data-aos="fade-up" data-aos-duration="800" data-aos-offset="20">SOFIN Blog</h1>
            @if (!empty($blogs))
            <a href="{{ $blogs[0]->detailUrl() }}" target="_blank" class="hover:text-primary text-2xl mt-10 mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-offset="20">{{ $blogs[0]->name() }}</a>
            <img src="{{ $blogs[0]->thumbnailUrl() }}" class="rounded-lg aspect-square object-cover" alt="SoFinNetwork" data-aos="fade-up" data-aos-duration="800" data-aos-offset="20">
            @endif
            <a href="https://flipboarddaily.online/" target="_blank" class="mt-2 sm:mt-5 text-primary" data-aos="fade-up" data-aos-duration="800" data-aos-offset="20">See more</a>
          </div>

          <div class="flex flex-1 flex-col text-text--light w-full sm:w-7/12 gap-y-12 sm:gap-y-10 pl-0 sm:pl-10">
            @if (!empty($blogs))
              @foreach ($blogs as $key => $blog)
                  @if ($key !== 0)
                      <div class="flex flex-col sm:flex-row justify-between items-center gap-y-5 sm:gap-y-0" data-aos="fade-up" data-aos-duration="800" data-aos-offset="20" data-aos-delay="{{ $key * 100 }}">
                          <img src="{{ $blog->thumbnailUrl() }}" class="w-full sm:w-5/12 rounded-lg aspect-video object-cover" alt="SoFinNetwork">
                          <div class="flex flex-col justify-between w-full pl-0 sm:pl-5">
                              <a href="{{ $blog->detailUrl() }}" target="_blank" class="text-2xl font-bold hover:text-primary ">{{ $blog->name() }}</a>
                              <p>{{ $blog->description() }}</p>
                              <a href="{{ $blog->detailUrl() }}" target="_blank" class="mt-2 sm:mt-5 text-primary">See more</a>
                          </div>
                      </div>
                  @endif
              @endforeach
            @endif
        </div>
    </section>
</div>
@stop
