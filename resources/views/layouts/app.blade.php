<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('motel.name'))</title>
    <meta name="description" content="@yield('meta_description', __('motel.tagline'))">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('motel.name') }}">
    <meta property="og:title" content="@yield('title', config('motel.name'))">
    <meta property="og:description" content="@yield('meta_description', __('motel.tagline'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_SY' : 'en_US' }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('title', config('motel.name'))">
    <meta name="twitter:description" content="@yield('meta_description', __('motel.tagline'))">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script>
        if (typeof tailwind !== 'undefined') {
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            ocean: {
                                deep: '#3A3632',
                                mid: '#43bac4',
                                light: '#9FDCE3',
                            },
                            sand: {
                                light: '#e8ded2',
                                mid: '#43bac4',
                                dark: '#cfc4b8',
                            },
                            brand: {
                                teal: '#43bac4',
                                sand: '#e8ded2',
                                white: '#ffffff',
                            },
                        },
                        fontFamily: {
                            sans: ['Segoe UI', 'Tahoma', 'Arial', 'Noto Sans Arabic', 'system-ui', 'sans-serif'],
                        },
                    },
                },
            };
        }
    </script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @stack('styles')
    @include('partials.schema')
</head>
<body class="min-h-screen bg-sand-light font-sans text-ocean-deep antialiased">
    @include('partials.info-bar')
    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    <x-floating-whatsapp />

    @stack('scripts')
</body>
</html>
