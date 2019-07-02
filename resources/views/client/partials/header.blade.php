<!-- Header -->
<header class="site-header">
    <div class="site-header__container">
        <a href="{{ route('home.index') }}"><img src="{{ asset('images/primdev-logo.svg') }}" alt="Logo Primakara Developers" class="site-header__logo"></a>
        <nav class="site-header__menu-desktop">
            <a href="{{ route('home.index') }}" class="site-header__menu-desktop-item {{ \AppHelper::activeMenu('home.index') }}">Home</a>
            <a href="{{ route('home.postList', [ 'categorySlug' => 'story' ]) }}" class="site-header__menu-desktop-item">Story</a>
            <a href="/about" class="site-header__menu-desktop-item">About</a>
            <a href="{{ route('home.postList', [ 'categorySlug' => 'event' ]) }}" class="site-header__menu-desktop-item site-header__menu-desktop-item--with-background">Event</a>
        </nav>

        <a href="javascript:void(0)" class="site-header__menu-mobile-icon">
            <div class="site-header__menu-mobile-icon__middle"></div>
        </a>

        <div class="mobile-nav">
            <a href="javascript:void(0)" class="mobile-nav__close-button">Close</a>
            <nav class="mobile-nav__menu">
                <a href="{{ route('home.index') }}" class="mobile-nav__menu-item mobile-nav__menu-item--active">Home</a>
                <a href="{{ route('home.postList', [ 'categorySlug' => 'story' ]) }}" class="mobile-nav__menu-item">Story</a>
                <a href="/about" class="mobile-nav__menu-item">About</a>
                <a href="{{ route('home.postList', [ 'categorySlug' => 'event' ]) }}" class="mobile-nav__menu-item mobile-nav__menu-item--with-background">Event</a>
            </nav>
        </div>
    </div>
</header>
<!-- Header -->
