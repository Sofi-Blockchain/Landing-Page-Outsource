<section class="bg-light-second dark:bg-bg--dark m-auto py-5">
    <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto sm:mt-40 flex flex-col sm:flex-row">
        <div class="flex flex-col w-full sm:w-3/5 gap-y-5">
            <span class="text-text--light dark:text-gradient text-3xl">{{ $fullName }}</span>
            <p>{{ $foreword }}</p>
            <div class="flex items-center flex-col sm:flex-row">
                <div class="flex items-center p-4 text-text--light rounded-lg bg-white gap-x-5 w-full sm:w-1/2">
                    {!! config('svg.sms') !!}
                    <input type="text" class="outline-none" placeholder="Input email address">
                </div>
                <div class="sm:ml-10 bg-gradient--primary py-4 mt-5 sm:mt-0 w-full sm:w-auto px-8 text-text--light rounded-lg">
                    <span>Get In Touch</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full sm:w-2/5 sm:pl-20 mt-10 sm:mt-0">
            <ul class="licons">
                <li class="flex items-center gap-x-2">{!! config('svg.location') !!}<span>{{ $address }}</span></li>
                <li class="flex items-center gap-x-2 mt-2">{!! config('svg.call') !!}<span>{{ $phoneEng }} (US)</span></li>
                <li class="flex items-center gap-x-2 mt-2">{!! config('svg.call') !!}<span>{{ $phoneVie }} (Vietnam)</span></li>
                <li class="flex items-center gap-x-2 mt-2">{!! config('svg.mail') !!}<span>{{ $email }}</span></li>
            </ul>
            <ul class="flex justify-end mt-10 gap-x-2">
                <li><a href="{{ $facebook }}" target="_blank">{!! config('svg.facebook') !!}</a></li>
                <li><a href="{{ $linkedin }}" target="_blank">{!! config('svg.linkedin') !!}</a></li>
                <li><a href="{{ $instagram }}" target="_blank">{!! config('svg.instagram') !!}</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center py-10">
        <span>© {{ $copyright }}</span>
    </div>
</section>