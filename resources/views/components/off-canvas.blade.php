<div id="off-canvas" class="bg-bg--light dark:bg-bg--dark off-canvas fixed top-0 right-0 bottom-0 left-0 z-50 flex">
  <div class="flex-1 flex flex-col items-end h-full">
    <div class="flex-col max-w-screen-md w-full px-10 2xl:px-4 pt-10 2xl:pt-4 pb-16 h-full grid justify-items-stretch">
      <div class="flex justify-between items-center">
        <ul class="flex sm:hidden gap-x-5 reverse-cls">
          <li><a href="{{ route('switchLanguage', ['language' => 'en']) }}" class="text-xl ui-opt {{ app()->getLocale() == config('theme.language')[0] ? 'lang--active' : ''}}">EN</a></li>
          <li><a href="{{ route('switchLanguage', ['language' => 'vi']) }}" class="text-xl ui-opt {{ app()->getLocale() == config('theme.language')[1] ? 'lang--active' : ''}}">VN</a></li>
          <li><a href="{{ route('switchMode', ['mode' => config('theme.mode')[0]]) }}" class="text-xl ui-opt w-10 h-10 {{ session()->get('mode') == config('theme.mode')[0] ? 'mode--active' : '' }}">{!! config('svg.moon') !!}</a></li>
          <li><a href="{{ route('switchMode', ['mode' => config('theme.mode')[1]]) }}" class="text-xl ui-opt w-10 h-10 {{ session()->get('mode') == config('theme.mode')[1] ? 'mode--active' : '' }}">{!! config('svg.sun') !!}</a></li>
        </ul>
        <div class="off-canvas-toggle off-canvas__close h-14 w-14 rounded-full justify-self-end sm:justify-self-start"></div>
      </div>
      <ul class="off-canvas__menu flex-1 flex-col w-full justify-self-center max-w-xs">
        @foreach ($menus as $menu)
        <li class="py-3 border-b last:border-0"><a href="{{ route($menu['routeName']) }}" class="text-4xl {{ Route::currentRouteName() === $menu['routeName'] ? 'text-primary' : '' }}">{{ $menu['label'] }}</a></li>
        @endforeach
      </ul>
      <ul class="off-canvas__menu flex-col w-full justify-self-center max-w-xs gap-y-3">
        @foreach ($subMenus as $sub)
        <li><a href="{{ $sub['link'] }}" target="_blank">{{ $sub['label'] }}</a></li>
        @endforeach
      </ul>
      <ul class="flex items-center gap-x-2 h-fit self-end">
        <li><span class="text-xl">Follow us</span></li>
        @foreach ($socials as $social)
        <li><a href="{{ $social['link'] }}" target="_blank"><img src="{{ $social['icon'] }}" alt="{{ $social['label'] }}"></a></li>
        @endforeach
      </ul>
    </div>
  </div>
  <img src="{{ $menuBackground }}" class="object-cover flex-1 hidden md:flex" alt="SoFin Network" class="flex-1">
</div>