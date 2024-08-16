<div class="header w-full fixed top-0 h-24 z-30 dark:bg-bg--dark bg-bg--light {{ $isHide ? 'hidden' : '' }}" id="header">
  <div class="max-w-screen-2xl 2xl:px-0 px-5 sm:px-10 h-full m-auto flex justify-between items-center py-6">
    <a href="{{ route('index') }}" class="h-full w-1/5 flex items-center gap-x-5">
      <img class="object-contain object-left h-full" src="{{ asset('assets/images/sofin-full-logo.png') }}" alt="SoFinNetwork">
    </a>
    <ul class="hidden sm:flex flex-auto items-center gap-x-10 justify-center list-none">
      @foreach ($menus as $menu)
        <li><a href="{{ route($menu['routeName']) }}" class="uppercase {{ Route::currentRouteName() === $menu['routeName'] ? 'text-primary' : '' }}">{{ $menu['label'] }}</a></li>
      @endforeach
    </ul>
    <div class="w-1/5 flex justify-end items-center gap-x-5">
      <a href="#" class="hidden sm:flex bg-gradient--primary h-14 px-4 justify-center items-center text-text--light rounded-lg">ENG</a>
      <div class="header__hambuger h-14 w-14 rounded-full off-canvas-toggle relative"></div>
    </div>
  </div>
</div>
<x-off-canvas />
