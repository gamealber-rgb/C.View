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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Great+Vibes&family=Noto+Sans+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ocean: {
                            deep: '#0A4D68',
                            mid: '#088395',
                            light: '#05BFDB',
                        },
                        sand: {
                            light: '#F5E6C8',
                            mid: '#E8C547',
                            dark: '#D4A574',
                        },
                    },
                    fontFamily: {
                        sans: ['DM Sans', 'Noto Sans Arabic', 'system-ui', 'sans-serif'],
                    },
                },
            },
        };
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
