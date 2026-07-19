@php
    $locale = app()->getLocale();
    $navLinks = [
        ['route' => 'home', 'label' => __('site.nav.home'), 'active' => ['home']],
        ['route' => 'rooms.index', 'label' => __('site.nav.rooms'), 'active' => ['rooms.index', 'rooms.show']],
        ['route' => 'menu', 'label' => __('site.nav.menu'), 'active' => ['menu']],
        ['route' => 'services', 'label' => __('site.nav.services'), 'active' => ['services']],
        ['route' => 'about', 'label' => __('site.nav.about'), 'active' => ['about']],
        ['route' => 'contact', 'label' => __('site.nav.contact'), 'active' => ['contact']],
    ];
@endphp

<nav class="site-nav sticky top-0 z-50 border-b border-sand-dark/40 bg-white/95 backdrop-blur-sm">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-3 px-4 py-3 sm:px-6 sm:py-4">
        <a href="{{ route('home') }}" class="site-nav__logo shrink-0 transition opacity-95 hover:opacity-100">
            <x-logo variant="dark" size="sm" />
        </a>

        <div class="flex items-center gap-2 md:order-3">
            <div class="site-nav__locale flex overflow-hidden rounded-lg border border-ocean-deep/25 text-xs font-bold uppercase tracking-wide" role="group" aria-label="{{ __('site.nav.language_toggle') }}">
                <a href="{{ route('locale.switch', 'ar') }}"
                   class="site-nav__locale-btn px-2.5 py-1.5 transition {{ $locale === 'ar' ? 'site-nav__locale-btn--active' : '' }}"
                   aria-current="{{ $locale === 'ar' ? 'true' : 'false' }}">AR</a>
                <a href="{{ route('locale.switch', 'en') }}"
                   class="site-nav__locale-btn px-2.5 py-1.5 transition {{ $locale === 'en' ? 'site-nav__locale-btn--active' : '' }}"
                   aria-current="{{ $locale === 'en' ? 'true' : 'false' }}">EN</a>
            </div>

            <button type="button" id="nav-toggle" class="site-nav__toggle rounded-lg p-2 text-ocean-deep hover:bg-sand-light md:hidden" aria-label="{{ __('site.nav.toggle_menu') }}" aria-expanded="false">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="nav-icon-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path id="nav-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div id="nav-menu" class="site-nav__menu hidden w-full flex-col gap-1 border-t border-sand-mid/20 pt-4 md:order-2 md:flex md:w-auto md:flex-1 md:flex-row md:items-center md:justify-end md:gap-1.5 md:border-0 md:pt-0 lg:gap-2">
            @foreach ($navLinks as $link)
                <a href="{{ route($link['route']) }}"
                   class="site-nav__link rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs($link['active']) ? 'site-nav__link--active' : '' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</nav>

<script>
    document.getElementById('nav-toggle')?.addEventListener('click', function () {
        const menu = document.getElementById('nav-menu');
        const open = document.getElementById('nav-icon-open');
        const close = document.getElementById('nav-icon-close');
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
        open.classList.toggle('hidden');
        close.classList.toggle('hidden');
    });
</script>
