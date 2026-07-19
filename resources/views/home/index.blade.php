@extends('layouts.app')

@section('title', config('motel.name').' — '.__('site.home.title'))
@section('meta_description', __('site.home.meta_description'))

@section('content')
    <section class="relative flex min-h-[70vh] items-center justify-center overflow-hidden bg-gradient-to-br from-ocean-mid to-[#3699a1] px-4 py-20 text-white sm:px-6">
        <div class="absolute inset-0 opacity-20" style="background-image: url('{{ asset('images/hero-coast.svg') }}'); background-size: cover; background-position: center;"></div>
        <div class="relative z-10 mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-white/90">{{ __('site.home.hero_badge') }}</p>
            <div class="mt-4 flex justify-center">
                <x-logo variant="light" size="lg" class="drop-shadow-[0_2px_12px_rgba(0,0,0,0.25)]" />
            </div>
            <p class="mt-5 text-lg text-white/90 sm:text-xl">{{ __('motel.tagline') }}</p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('rooms.index') }}" class="rounded-xl bg-white px-6 py-3 font-semibold text-ocean-mid transition hover:bg-brand-sand">{{ __('site.home.view_rooms') }}</a>
                <a href="{{ route('contact') }}" class="rounded-xl border-2 border-white/60 px-6 py-3 font-semibold text-white transition hover:bg-white/10">{{ __('site.home.contact_us') }}</a>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-ocean-deep">{{ __('site.home.about_title') }}</h2>
            <p class="mt-4 text-lg leading-relaxed text-ocean-deep/75">{{ __('motel.about') }}</p>
            <a href="{{ route('about') }}" class="mt-4 inline-block text-sm font-semibold text-ocean-mid hover:text-ocean-deep">{{ __('site.home.about_link') }} →</a>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <h2 class="text-center text-3xl font-bold text-ocean-deep">{{ __('site.home.why_title') }}</h2>
            <p class="mx-auto mt-2 max-w-xl text-center text-ocean-deep/70">{{ __('site.home.why_subtitle') }}</p>
            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach (__('motel.highlights') as $highlight)
                    <div class="rounded-2xl border border-sand-mid/40 bg-sand-light/30 p-6">
                        <h3 class="text-lg font-semibold text-ocean-deep">{{ $highlight['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ocean-deep/70">{{ $highlight['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        <h2 class="text-center text-3xl font-bold text-ocean-deep">{{ __('site.home.stay_title') }}</h2>
        <p class="mx-auto mt-2 max-w-xl text-center text-ocean-deep/70">{{ __('site.home.stay_subtitle') }}</p>
        <div class="mt-8">
            <x-stay-info />
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <h2 class="text-center text-3xl font-bold text-ocean-deep">{{ __('site.home.offers_title') }}</h2>
            <p class="mx-auto mt-2 max-w-xl text-center text-ocean-deep/70">{{ __('site.home.offers_subtitle') }}</p>
            <div class="mt-10 grid gap-6 md:grid-cols-2">
                @foreach (__('motel.offers') as $offer)
                    <div class="rounded-2xl border border-ocean-mid/30 bg-gradient-to-br from-ocean-mid/5 to-ocean-mid/10 p-6">
                        <h3 class="text-xl font-semibold text-ocean-deep">{{ $offer['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-ocean-deep/75">{{ $offer['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        <h2 class="text-center text-3xl font-bold text-ocean-deep">{{ __('site.home.testimonials_title') }}</h2>
        <p class="mx-auto mt-2 max-w-xl text-center text-ocean-deep/70">{{ __('site.home.testimonials_subtitle') }}</p>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach (__('motel.testimonials') as $testimonial)
                <blockquote class="rounded-2xl border border-sand-mid/40 bg-white p-6 shadow-sm">
                    <div class="flex gap-0.5 text-ocean-mid" aria-hidden="true">
                        @for ($i = 0; $i < ($testimonial['rating'] ?? 5); $i++)
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="mt-3 text-sm leading-relaxed text-ocean-deep/80">"{{ $testimonial['text'] }}"</p>
                    <footer class="mt-4 text-sm font-semibold text-ocean-mid">— {{ $testimonial['name'] }}</footer>
                </blockquote>
            @endforeach
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto max-w-6xl px-4 sm:px-6">
            <h2 class="text-center text-3xl font-bold text-ocean-deep">{{ __('site.home.location_title') }}</h2>
            <p class="mx-auto mt-2 max-w-xl text-center text-ocean-deep/70">{{ __('site.home.location_subtitle') }}</p>
            <ul class="mx-auto mt-10 max-w-2xl divide-y divide-sand-mid/40 rounded-2xl border border-sand-mid/40 bg-sand-light/30">
                @foreach (__('motel.nearby') as $place)
                    <li class="flex items-center justify-between gap-4 px-6 py-4">
                        <span class="font-medium text-ocean-deep">{{ $place['name'] }}</span>
                        <span class="shrink-0 text-sm text-ocean-mid">{{ $place['distance'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-16 sm:px-6">
        <h2 class="text-center text-3xl font-bold text-ocean-deep">{{ __('site.home.explore_title') }}</h2>
        <p class="mx-auto mt-2 max-w-xl text-center text-ocean-deep/70">{{ __('site.home.explore_subtitle') }}</p>
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['rooms.index', 'rooms', 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                ['menu', 'menu', 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['services', 'services', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                ['contact', 'contact', 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z'],
            ] as [$route, $key, $iconPath])
                <a href="{{ route($route) }}" class="group rounded-2xl border border-sand-mid/40 bg-sand-light/50 p-6 transition hover:border-ocean-mid hover:shadow-md">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-ocean-mid text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $iconPath }}"/></svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-ocean-deep group-hover:text-ocean-mid">{{ __('site.home.cards.'.$key.'.title') }}</h3>
                    <p class="mt-2 text-sm text-ocean-deep/70">{{ __('site.home.cards.'.$key.'.desc') }}</p>
                </a>
            @endforeach
        </div>
    </section>
@endsection
