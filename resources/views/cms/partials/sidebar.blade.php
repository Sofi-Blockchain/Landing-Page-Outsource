<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('cms.index') }}" class="brand-link">
        <img src="{{ asset('assets/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">SOFIN Network CMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->avatarUrl() }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->getFullname() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @foreach ($routes as $route)
                @isset($route['title'])
                <li class="nav-header">{{ $route['title'] }}</li>
                @endisset
                @isset($route['nav'])
                @foreach ($route['nav'] as $item)
                <li class="nav-item
                        @if (isset($item['routeGroup']))
                            @if (strpos(Route::currentRouteName(), $item['routeGroup']) !== false) menu-open @endif
                        @endif">
                    <a href="@if (isset($item['routeName'])) {{ route($item['routeName']) }}@else# @endif" class="nav-link
                        @if (isset($item['routeName'])) @if (Route::currentRouteName() == $item['routeName']) active @endif
                        @elseif(isset($item['routeGroup']))
                        @if (strpos(Route::currentRouteName(), $item['routeGroup']) !== false) active @endif
                        @endif">
                        <i class="nav-icon {{ $item['iconClass'] }}" aria-hidden="true"></i>
                        <p>
                            {{ $item['label'] }}
                            @isset($item['children'])
                            <i class="fas fa-angle-left right"></i>
                            @endisset
                        </p>
                    </a>
                    @isset($item['children'])
                    <ul class="nav nav-treeview">
                        @foreach ($item['children'] as $child)
                        <li class="nav-item">
                            <a href="{{ route($child['routeName']) }}"
                                class="nav-link @if (isset($child['routeName']) && Route::currentRouteName() == $child['routeName']) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ $child['label'] }}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endisset
                </li>
                @endforeach
                @endisset
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>