@extends('layouts.app')

@section('title', __('site.about.title').' — '.config('motel.name'))
@section('meta_description', __('site.about.meta_description'))

@section('content')
    <section class="bg-gradient-to-r from-ocean-deep to-ocean-mid px-4 py-14 text-white sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h1 class="text-3xl font-bold sm:text-4xl">{{ __('site.about.heading') }}</h1>
            <p class="mt-2 max-w-2xl text-white/85">{{ __('site.about.subtitle') }}</p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-12 sm:px-6">
        <div class="grid gap-10 lg:grid-cols-2">
            <div>
                <h2 class="text-2xl font-bold text-ocean-deep">{{ __('site.about.story_title') }}</h2>
                <p class="mt-4 leading-relaxed text-ocean-deep/75">{{ __('motel.about') }}</p>
                <p class="mt-4 leading-relaxed text-ocean-deep/75">{{ __('motel.about_extended') }}</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-ocean-deep">{{ __('site.about.values_title') }}</h2>
                <ul class="mt-6 space-y-4">
                    @foreach (__('site.about.values') as $value)
                        <li class="rounded-xl border border-sand-mid/40 bg-white p-5 shadow-sm">
                            <h3 class="font-semibold text-ocean-deep">{{ $value['title'] }}</h3>
                            <p class="mt-1 text-sm text-ocean-deep/70">{{ $value['desc'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-bold text-ocean-deep">{{ __('site.home.stay_title') }}</h2>
            <div class="mt-6">
                <x-stay-info />
            </div>
        </div>

        <div id="faq" class="mt-16 scroll-mt-28">
            <h2 class="text-2xl font-bold text-ocean-deep">{{ __('site.faq.heading') }}</h2>
            <p class="mt-2 max-w-2xl text-ocean-deep/70">{{ __('site.faq.subtitle') }}</p>

            <div class="mx-auto mt-8 max-w-3xl space-y-4">
                @foreach (__('motel.faq') as $index => $item)
                    <details class="group rounded-2xl border border-sand-mid/40 bg-white shadow-sm" {{ $index === 0 ? 'open' : '' }}>
                        <summary class="cursor-pointer list-none px-6 py-4 font-semibold text-ocean-deep marker:content-none [&::-webkit-details-marker]:hidden">
                            <span class="flex items-center justify-between gap-4">
                                {{ $item['question'] }}
                                <svg class="h-5 w-5 shrink-0 text-ocean-mid transition group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </summary>
                        <div class="border-t border-sand-mid/30 px-6 py-4 text-sm leading-relaxed text-ocean-deep/75">
                            {{ $item['answer'] }}
                        </div>
                    </details>
                @endforeach
            </div>

            <div class="mx-auto mt-10 max-w-3xl rounded-2xl bg-ocean-deep/5 p-6 text-center">
                <p class="font-medium text-ocean-deep">{{ __('site.faq.still_questions') }}</p>
                <a href="{{ route('contact') }}" class="mt-3 inline-block rounded-xl bg-ocean-mid px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-ocean-deep">
                    {{ __('site.faq.contact_cta') }}
                </a>
            </div>
        </div>
    </section>
@endsection
