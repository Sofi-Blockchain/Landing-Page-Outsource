@extends('web.layouts.index')

@section('title', 'SOFIN Network | Let\'s talk')

@section('content')
<div class="w-full flex flex-col sm:flex-row">
    <div class="flex-1 flex justify-end bg--10" style="--bg10: url({{ asset($s['career_background']) }})">
        <div class="px-5 sm:max-w-screen-md w-full pt-40 pb-20 z-20 flex flex-col items-center justify-center">
            <h2 class="text-3xl sm:text-7xl"><span class="text-gradient">SOFIN NETWORK</span>✨</h2>
            <p class="text-center">We bring you valuable career opportunities to explore your full potential.</p>
            <a href="#opening" class="bg-gradient--primary bg-bg--light dark:bg-third px-4 sm:px-8 py-4 mt-20 rounded-lg text-text--light">Our Openings</a>
        </div>
    </div>
    <div class="flex-1 flex bg--11">
        <div class="sm:max-w-screen-md h-full max-h-none sm:max-h-screen w-full pt-40 px-5 sm:px-20 pb-10">
            <div class="swiper h-full" id="career-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full">
                        <div class="flex items-center flex-col sm:flex-row">
                            <img src="{{ asset('assets/images/career/career-4.png') }}" class="rounded-lg w-52" alt="SoFinNetwork">
                            <div class="flex flex-col w-80 bg-bg--light p-10 rounded-lg sm:-ml-10 z-10">
                                <span class="text-5xl text-bold text-text--light">20<span class="text-primary">+<span></span>
                                <p class="text-base text-text--light">Multi-sector strategic partners</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="flex items-center sm:justify-end flex-col sm:flex-row">
                            <div class="flex flex-col w-80 bg-bg--light p-10 rounded-lg sm:-mr-10 z-10">
                                <span class="text-5xl text-bold text-text--light">15<span class="text-primary">+<span></span>
                                <p class="text-base text-text--light">Developing Projects</p>
                            </div>
                            <img src="{{ asset('assets/images/career/career-5.png') }}" class="rounded-lg w-52" alt="SoFinNetwork">
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="flex items-center flex-col sm:flex-row">
                            <img src="{{ asset('assets/images/career/career-3.png') }}" class="rounded-lg w-52" alt="SoFinNetwork">
                            <div class="flex flex-col w-80 bg-bg--light p-10 rounded-lg sm:-ml-10 z-10">
                                <span class="text-5xl text-bold text-text--light">3K<span class="text-primary">+<span></span>
                                <p class="text-base text-text--light">Hi-speed Servers</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="flex items-center sm:justify-end flex-col sm:flex-row">
                            <div class="flex flex-col w-80 bg-bg--light p-10 rounded-lg sm:-mr-10 z-10">
                                <span class="text-5xl text-bold text-text--light">200<span class="text-primary">+<span></span>
                                <p class="text-base text-text--light">Employees</p>
                            </div>
                            <img src="{{ asset('assets/images/career/career-2.png') }}" class="rounded-lg w-52" alt="SoFinNetwork">
                        </div>
                    </div>
                    <div class="swiper-slide w-full">
                        <div class="flex items-center flex-col sm:flex-row">
                            <div class="flex flex-col w-80 bg-bg--light p-10 rounded-lg sm:-mr-10 z-10">
                                <span class="text-5xl text-bold text-text--light"><span class="text-primary">~</span>10</span>
                                <p class="text-base text-text--light">Years in Business</p>
                            </div>
                            <img src="{{ asset('assets/images/career/career-1.png') }}" class="rounded-lg w-52" alt="SoFinNetwork">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 m-auto items-center flex flex-col py-20 sm:py-44" id="opening">
    <h1 class="text-3xl sm:text-7xl text-gradient py-10 sm:mb-10">Our Openings</h1>
    <div class="flex w-full max-w-screen-xl gap-x-28 flex-col sm:flex-row">
        <div class="flex-1 flex-col sm:flex-row flex sm:items-center gap-x-5">
            <span class="text-base">Departments</span>
            <select name="" id="" class="bg-light-second dark:bg-black-light px-10 py-3 rounded-lg w-full sm:w-96">
                <option value="">All</option>
                @foreach (\App\Models\Careers::DEPARTMENT_NAMES as $k => $dep)
                  <option value="{{ $k }}">{{ $dep['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex-1 flex-col sm:flex-row flex sm:items-center gap-x-5">
            <span class="text-base">Locations</span>
            <select name="" id="" class="bg-light-second dark:bg-black-light px-10 py-3 rounded-lg w-full sm:w-96">
                <option value="">All</option>
                @foreach (\App\Models\Careers::LOCATION_NAMES as $k => $loc)
                  <option value="{{ $k }}">{{ $loc['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex flex-col w-full mt-20 jobs">
    @if(session('fail'))
        <div class="text-danger">{{session('fail')}}</div>
    @endif
    @if(session('success'))
        <div class="text-danger">{{session('success')}}</div>
    @endif

    @foreach ($careers as $career)
        <div class="flex flex-col py-5 gap-y-5 sm:gap-y-10 w-full faq" data-aos="fade-up" data-aos-duration="800" data-aos-offset="50">
            <div class="flex items-center justify-between w-full flex-col sm:flex-row">
                <div class="text-base sm:text-3xl flex items-center justify-between w-full sm:w-9/12 flex-col sm:flex-row">
                    <span class="text-3xl text-primary faq-trigger">{{ $career->name() }}</span>
                    <div class="flex gap-x-5 sm:gap-x-20 w-full sm:w-auto justify-between">
                        <div class="flex items-center gap-x-1 sm:gap-x-5 sm:ml-20 sm:w-40">
                            {!! config('svg.location-outline') !!}
                            <span class="text-base">{{ $career->location() }}</span>
                        </div>
                        <div class="flex items-center gap-x-1 sm:gap-x-5 sm:w-40">
                            {!! config('svg.clock') !!}
                            <span class="text-base">{{ $career->department() }}</span>
                        </div>
                        <div class="story-swiper-next rounded-full w-10 sm:w-14 h-10 sm:h-14 aspect-square flex items-center justify-center faq-toggle">{!! config('svg.arrow-right-stroke') !!}</div>
                    </div>
                </div>
                <div class="w-full sm:w-3/12 flex justify-end mt-5 sm:mt-0">
                    <button class="w-full sm:w-auto bg-gradient--primary bg-bg--light dark:bg-third px-4 sm:px-8 py-4 rounded-lg text-text--light modal-toggle" data-modal="#apply" data-hidden-id="{{ $career->id }}">Apply</button>
                </div>
            </div>
            <div class="max-w-5xl faq-ans text-sm sm:text-base opacity-60 career-desc">
                {!! $career->description() !!}
            </div>
        </div>
    @endforeach

    </div>
</section>

<div class="modal" id="apply">
    <div class="modal__content">
        <div class="max-w-screen-md flex flex-col items-center m-auto w-full gap-y-5">
            <form id="career-form" method="post" action="{{ route('careerMail') }}" class="tab-content flex flex-col items-center w-full gap-y-5 px-5 sm:px-10 py-10 sm:py-20 bg-bg--light dark:bg-bg--dark shadow"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="position" class="form-control" value="">
                <div class="flex items-center gap-x-10 w-full">
                    <label class="w-32 hidden sm:block" for="">Name</label>
                    <input class="w-full bg-light-second dark:bg-third rounded-2xl p-5" type="text" placeholder="Name" id="name" name="name" required>
                </div>
                <div class="flex items-center gap-x-10 w-full">
                    <label class="w-32 hidden sm:block" for="">Email</label>
                    <input class="w-full bg-light-second dark:bg-third rounded-2xl p-5" type="email" placeholder="Email" id="email" name="careerEmail" required>
                </div>
                <div class="flex items-center gap-x-10 w-full">
                    <label class="w-32 hidden sm:block" for="">Phone</label>
                    <input class="w-full bg-light-second dark:bg-third rounded-2xl p-5" type="text" placeholder="Phone" id="phone" name="phone" required>
                </div>
                <div class="flex items-center gap-x-10 w-full">
                    <label class="w-32 hidden sm:block" for="">Date</label>
                    <input class="w-full bg-light-second dark:bg-third rounded-2xl p-5" type="date" placeholder="Date" id="date" name="date" required>
                </div>
                <div class="flex items-center gap-x-10 w-full">
                    <label class="w-32 hidden sm:block" for="">Gender</label>
                    <input class="w-full bg-light-second dark:bg-third rounded-2xl p-5" type="text" placeholder="Gender" id="gender" name="gender" required>
                </div>
                <div class="flex items-center gap-x-10 w-full">
                    <label class="w-32 hidden sm:block" for="attachment">CV/Portfolio</label>
                    <input class="w-full bg-light-second dark:bg-third rounded-2xl p-5" type="file" placeholder="CV/Portfolio" id="attachment" name="attachment" required>
                </div>
                <input id="submitButton" type="submit" class="w-full sm:w-auto bg-gradient--primary px-8 py-4 rounded-lg text-text--light mt-5 sm:mt-10 delay-[100ms] duration-[600ms] taos:translate-y-[50px] taos:opacity-0" value="Apply">
            </form>
        </div>
    </div>
</div>
@stop

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.modal-toggle').forEach(button => {
                button.addEventListener('click', function() {
                    let hiddenId = this.getAttribute('data-hidden-id');
                    document.querySelector('.form-control').value = hiddenId;
                });
            });
        });

        function checkSpam(formId, emailInputId) {
        document.getElementById('submitButton').addEventListener('click', function(event) {
            const inputEmail = document.getElementById(emailInputId).value;
            const currentTime = new Date().getTime();

            const lastSentEmail = JSON.parse(localStorage.getItem(`${formId}-lastSentEmail`));

            if (lastSentEmail && lastSentEmail.email === inputEmail) {
                const timeDifference = currentTime - lastSentEmail.timestamp;
                const timeThreshold = 3 * 60 * 1000;

                if (timeDifference < timeThreshold) {
                    console.log(11111);
                    const remainingTime = Math.ceil((timeThreshold - timeDifference) / 1000);
                    alert(`Please resend later ${remainingTime} seconds.`);
                    event.preventDefault();
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

        document.getElementById('career-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const inputEmail = document.getElementById('email').value;
            const inputName = document.getElementById('name').value;
            const inputPhone = document.getElementById('phone').value;
            const inputDate = document.getElementById('date').value;
            const inputGender = document.getElementById('gender').value;
            const inputAttachment = document.getElementById('attachment');
            if (inputEmail === '' || inputName === '' || inputPhone === '' || inputDate === '' || inputGender === '' || !inputAttachment.files.length ) {
                // alert('Please fill in all required fields.');
            } else {
                checkSpam('career-form', 'email');
            }
        });

    </script>
@endsection
