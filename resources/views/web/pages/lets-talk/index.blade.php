@extends('web.layouts.index')

@section('title', 'SOFIN Network | Let\'s talk')

@section('content')
<div class="w-full bg-bg--light py-44">
    <div class="max-w-screen-xl 2xl:px-0 px-5 sm:px-10 m-auto flex flex-col items-center gap-y-10 sm:gap-y-20">
        <span class="text-3xl sm:text-5xl text-extrabold text-primary" data-aos="fade-up" data-aos-duration="800" data-aos-offset="200" data-aos-delay="200">Committed to Advance your Brand</span>
        <div class="flex flex-wrap sm:flex-nowrap">
            <div class="connect-step flex text-text--light flex-col items-center gap-y-2 sm:gap-y-10 w-1/2 sm:w-1/4 px-5 sm:px-10" data-aos="fade-up" data-aos-duration="800" data-aos-offset="200" data-aos-delay="200">
                {!! config('svg.backward') !!}
                <span class="text-xl sm:text-3xl">Connect</span>
                <p class="text-center text-sm sm:text-base">Multilateral value relationships</p>
            </div>
            <div class="connect-step flex text-text--light flex-col items-center gap-y-2 sm:gap-y-10 w-1/2 sm:w-1/4 px-5 sm:px-10" data-aos="fade-up" data-aos-duration="800" data-aos-offset="200" data-aos-delay="300">
                {!! config('svg.backward') !!}
                <span class="text-xl sm:text-3xl">Creative</span>
                <p class="text-center text-sm sm:text-base">Technology application & outstanding creativity</p>
            </div>
            <div class="connect-step flex text-text--light flex-col items-center gap-y-2 sm:gap-y-10 w-1/2 sm:w-1/4 px-5 sm:px-10" data-aos="fade-up" data-aos-duration="800" data-aos-offset="200" data-aos-delay="400">
                {!! config('svg.backward') !!}
                <span class="text-xl sm:text-3xl">Companion</span>
                <p class="text-center text-sm sm:text-base">Working together to set long-term goals</p>
            </div>
            <div class="connect-step flex text-text--light flex-col items-center gap-y-2 sm:gap-y-10 w-1/2 sm:w-1/4 px-5 sm:px-10" data-aos="fade-up" data-aos-duration="800" data-aos-offset="200" data-aos-delay="500">
                {!! config('svg.backward') !!}
                <span class="text-xl sm:text-3xl">Develop</span>
                <p class="text-center text-sm sm:text-base">Scalable and sustainable development</p>
            </div>
        </div>
        <a href="#form-fill" class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100" data-aos-delay="200">Connect with SOFIN</a>
    </div>
</div>
<div class="flex flex-col max-w-screen-xl 2xl:px-0 px-5 sm:px-10 m-auto items-center py-20 sm:py-44">
    <span class='text-3xl sm:text-5xl text-bold' data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">FREQUENTLY ASKED QUESTIONS</span>
    <div class="flex flex-col mt-20 w-full gap-y-10">
        <div class="flex flex-col bg-bg--light shadow dark:bg-secondary rounded-3xl p-5 sm:p-8 gap-y-5 sm:gap-y-10 w-full faq" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
            <div class="flex items-center justify-between w-full">
                <span class="text-base sm:text-2xl">Who is SOFIN Network?</span>
                <div class="story-swiper-next rounded-full w-10 sm:w-14 h-10 sm:h-14 aspect-square flex items-center justify-center bg-bg--light shadow dark:bg-white-transparent faq-toggle">{!! config('svg.arrow-right') !!}</div>
            </div>
            <div class="faq-ans text-sm opacity-60">
                <p>SOFIN Network is an Integrated AI social media technology company. We provide a suite of innovative music and video production solutions to enhance and speedily monetize social media presence with our proprietary artificial intelligence and Web3 platforms aiming to revolutionize the music industry and unlock the immense potential of sustainable growth in the entertainment industry and music therapy business in the burgeoning healthcare industry.</p>
            </div>
        </div>
        <div class="flex flex-col bg-bg--light shadow dark:bg-secondary rounded-3xl p-5 sm:p-8 gap-y-5 sm:gap-y-10 w-full faq" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" data-aos-delay="100">
            <div class="flex items-center justify-between w-full">
                <span class="text-base sm:text-2xl">What kind of businesses does SOFIN Network work with?</span>
                <div class="story-swiper-next rounded-full w-10 sm:w-14 h-10 aspect-square sm:h-14 flex items-center justify-center bg-bg--light shadow dark:bg-white-transparent faq-toggle">{!! config('svg.arrow-right') !!}</div>
            </div>
            <div class="faq-ans text-sm opacity-60">
                <p>SOFIN Network  works with businesses of all sizes and industries, including startups, small businesses, and large corporations. We offer sustainable monetizing engines for musicians, singers, actors and actresses, music productions, motion picture companies, healthcare providers, and emerging growth publicly traded companies in various industry sectors.</p>
            </div>
        </div>
        <div class="flex flex-col bg-bg--light shadow dark:bg-secondary rounded-3xl p-5 sm:p-8 gap-y-5 sm:gap-y-10 w-full faq" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50" data-aos-delay="200">
            <div class="flex items-center justify-between w-full">
                <span class="text-base sm:text-2xl">What services does SOFIN Network offer?</span>
                <div class="story-swiper-next rounded-full w-10 sm:w-14 h-10 sm:h-14 aspect-square flex items-center justify-center bg-bg--light shadow dark:bg-white-transparent faq-toggle">{!! config('svg.arrow-right') !!}</div>
            </div>
            <div class="faq-ans text-sm opacity-60">
                <p>SOFIN Network offers a variety of AI-powered technology services:</p>
                <p>1. SOFIN XSocion instigates an extensive traffic mining system to efficiently generate revenue for online content by recommending and producing trending content topic related to the Music and Entertainment sector  including social media strategy development, content creation, community management, social media advertising, behavioral analytics and reporting. </p>
                <p>2. SOFIN iCMS generates exploded fan base for musicians and entertainment artists to share their work in progress, and then publish their complete tracks for all the world to recognize. Our CMS platform can build clients' revenue quickly via proprietary AI-driven social media advertising tools to create, grow, and monetize your talents.</p>
                <p>3. SOFIN AI Musicio Therapy technology offers medical-grade music created by deep tech to help improve mental wellness. Produced by our proprietary SOFIN AI engine, we have developed AI-generated songs with unique insights into the brain and behavior to build emotional fitness, supported by ubiquitous computing to harness the therapeutic power of music for people from every walk of life for anti depression, anti anxiety, pain and anger management.</p>
            </div>
        </div>
    </div>
</div>

<section id="form-fill">
    <div class="bg-light-third dark:bg-black-light p-5 sm:p-44" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
        <div class="max-w-screen-md flex flex-col items-center m-auto w-full gap-y-5">
            <span class="" data-aos="fade-up" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">READY TO WORK HARD WITH </span>
            <h1 class="text-3xl sm:text-5xl delay-[250ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0">SOFIN NETWORK!</h1>
            <div class="flex gap-x-5 sm:gap-x-10 mb-10" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
                <button class="bg-gradient--primary bg-bg--light dark:bg-third px-4 sm:px-8 py-4 rounded-lg text-text--light tab-button" data-tab="#tab-contact">Personal Contact</button>
                <button class="bg-bg--light dark:bg-third px-4 sm:px-8 py-4 rounded-lg tab-button" data-tab="#tab-partner">Brand / Partner</button>
            </div>
            <form method="post" action="{{ route('personalContact') }}" id="tab-contact" class="tab-content flex flex-col items-center w-full gap-y-5" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
                @csrf
                @if(session('fail'))
                    <div class="text-danger">{{session('fail')}}</div>
                @endif
                @if(session('success'))
                    <div class="text-danger">{{session('success')}}</div>
                @endif
                    <input class="w-full bg-bg--light dark:bg-third rounded-2xl p-5" type="text" placeholder="Your name:" id="emailInput" name="name" required>
                    <input class="w-full bg-bg--light dark:bg-third rounded-2xl p-5" type="email" placeholder="Your Email:" name="email" required>
                    <input class="w-full bg-bg--light dark:bg-third rounded-2xl p-5" type="text" placeholder="Your Channel Link:" name="channel" required>
                    <textarea class="w-full bg-bg--light dark:bg-third rounded-2xl p-5" id="" cols="30" rows="10" placeholder="Tell us your concern:" name="content" required></textarea>
                    <button class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light mt-10">Submit</button>
            </form>
            <form method="post" action="{{ route('brandContact') }}" id="tab-partner" class="tab-content flex flex-col items-center w-full gap-y-5 swiper-hide">
                @csrf
                @if(session('fail'))
                    <div class="text-danger">{{session('fail')}}</div>
                @endif
                @if(session('success'))
                    <div class="text-danger">{{session('success')}}</div>
                @endif
                <input class="w-full bg-bg--light dark:bg-third rounded-2xl p-5" type="text" placeholder="You're the representative of::" name="nameBrand" id="nameBrand" required>
                <input class="w-full bg-bg--light dark:bg-third rounded-2xl p-5" type="text" placeholder="Your Email:" name="emailBrand" id="emailBrand" required>
                <textarea class="w-full bg-bg--light dark:bg-third rounded-2xl p-5" name="contentBrand" id="contentBrand" cols="30" rows="10" placeholder="Tell us your concern:" required></textarea>
                <button class="bg-gradient--primary px-8 py-4 rounded-lg text-text--light mt-10">Submit</button>
            </form>
        </div>
    </div>
</section>
@stop

@section('scripts')
    <script>  
        function checkSpam(formId, emailInputId) {
        document.querySelector(`#${formId} button`).addEventListener('click', function(event) {
            event.preventDefault();

            const inputEmail = document.getElementById(emailInputId).value; 
            const currentTime = new Date().getTime(); 

            const lastSentEmail = JSON.parse(localStorage.getItem(`${formId}-lastSentEmail`));

            if (lastSentEmail && lastSentEmail.email === inputEmail) {
                const timeDifference = currentTime - lastSentEmail.timestamp;
                const timeThreshold = 3 * 60 * 1000; 

                if (timeDifference < timeThreshold) {
                    const remainingTime = Math.ceil((timeThreshold - timeDifference) / 1000);
                    alert(`Please resend later ${remainingTime} seconds.`);
                    return; 
                }
            }

            const emailData = {
                email: inputEmail,
                timestamp: currentTime,
            };

            localStorage.setItem(`${formId}-lastSentEmail`, JSON.stringify(emailData));
            document.getElementById(formId).submit();
            });
        }
        checkSpam('tab-contact', 'emailInput');
        checkSpam('tab-partner', 'emailBrand');
    </script>
@endsection
