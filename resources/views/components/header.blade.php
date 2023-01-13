<header id="header" class="header header-transparent header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container mothernav">

            <div class="nav">
                <a class="navbar-brand" href="/" style="width: 285px;">
                    <img src="/images/logo/logo-light.png" class="logo-dark" alt="logo" style="width: 285px;">
                </a>
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav__item with-dropdown">
                            <a href="{{route('index')}}" class="dropdown-toggle nav__item-link {{ Request::routeIs('index') ? 'active' : '' }}">{{ __('index.home') }}</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="{{route('menu')}}" class="dropdown-toggle nav__item-link {{ Request::routeIs('menu') ? 'active' : '' }}">{{ __('index.menu') }}</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="{{route('team')}}" class="dropdown-toggle nav__item-link {{ Request::routeIs('team') ? 'active' : '' }}">{{ __('index.team') }}</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="{{route('offers')}}" class="dropdown-toggle nav__item-link {{ Request::routeIs('offers') ? 'active' : '' }}">{{ __('index.offer') }}</a>
                        </li>
                        <li class="nav__item with-dropdown">
                            <a href="{{route('about')}}" class="dropdown-toggle nav__item-link {{ Request::routeIs('about') ? 'active' : '' }}">{{ __('index.about') }}</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="{{route('contact')}}" class="dropdown-toggle nav__item-link {{ Request::routeIs('contact') ? 'active' : '' }}">{{ __('index.contact') }}</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            @if(app()->getLocale() == 'ar')
                            <a class="dropdown-toggle nav__item-link" href="lang/en">
                                EN
                            </a>
                            @else
                            <a class="dropdown-toggle nav__item-link" href="lang/ar">
                                AR
                            </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
