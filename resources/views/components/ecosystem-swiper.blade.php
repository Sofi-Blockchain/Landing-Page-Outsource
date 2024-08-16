@foreach($ecosystems as $key => $ecosystem)
<section class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto relative tab-content" id="tab-ecosystem-all">
    <div class="all-swiper swiper ">
        <div class="swiper-wrapper">
          @foreach($group as $ecosystem)
            <div class="swiper-slide overflow-hidden">
                <img src="{{ asset('assets/images/eco/stream.png') }}" class="w-full radius--1" alt="SoFinNetwork">
                <div class="flex flex-col p-4 bg-bg--light dark:bg-bg--dark -mt-8 relative z-10 m-5 radius--1 shadow">
                    <div class="flex items-center gap-x-2">
                        <div class="w-12 h-12 bg-bg--light flex items-center shadow justify-center rounded-full p-2">
                            <img src="{{ asset('assets/images/logo-sofin.png') }}" class="w-full h-full" alt="SoFinNetwork">
                        </div>
                        <span class="text-xl">SOFIN Stream</span>
                    </div>
                    <span class="mt-2 ecosystem-detail text-text--light dark:text-text--dark">Our integrated Al-driven platform is designed to empower your brand and outfit your business with the marketing tools needed to succeed.</span>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</section>
@endforeach
