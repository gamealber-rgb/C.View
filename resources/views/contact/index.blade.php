@extends('layouts.app')

@section('title', __('site.contact.title').' — '.config('motel.name'))
@section('meta_description', __('site.contact.meta_description'))

@section('content')
    <section class="bg-gradient-to-r from-ocean-mid to-[#3699a1] px-4 py-14 text-white sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h1 class="text-3xl font-bold sm:text-4xl">{{ __('site.contact.heading') }}</h1>
            <p class="mt-2 max-w-2xl text-white/85">{{ __('site.contact.subtitle') }}</p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-12 sm:px-6">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="overflow-hidden rounded-2xl border border-sand-mid/40 shadow-sm">
                <iframe
                    src="{{ config('motel.google_maps_embed') }}"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="{{ __('site.contact.map_title', ['name' => config('motel.name')]) }}"
                    class="w-full"></iframe>
            </div>

            <div class="rounded-2xl border border-sand-mid/40 bg-white p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-ocean-deep">{{ __('site.contact.get_in_touch') }}</h2>
                <p class="mt-3 text-sm leading-relaxed text-ocean-deep/75">{{ __('motel.description') }}</p>
                <ul class="mt-6 space-y-4 text-ocean-deep/80">
                    <li class="flex gap-3">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-ocean-mid" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>{{ __('motel.address') }}</span>
                    </li>
                    <li class="flex gap-3">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-ocean-mid" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span><span class="font-medium text-ocean-deep">{{ __('site.contact.hours') }}:</span> {{ __('motel.hours') }}</span>
                    </li>
                    <li class="flex gap-3">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-ocean-mid" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:{{ preg_replace('/\D/', '', config('motel.phone')) }}" class="hover:text-ocean-mid">{{ config('motel.phone') }}</a>
                    </li>
                    <li class="flex gap-3">
                        <svg class="mt-0.5 h-5 w-5 shrink-0 text-ocean-mid" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:{{ config('motel.email') }}" class="hover:text-ocean-mid">{{ config('motel.email') }}</a>
                    </li>
                </ul>

                <div class="mt-8 flex flex-wrap gap-4">
                    <x-whatsapp-button
                        :url="\App\Support\WhatsApp::url(__('motel.whatsapp.contact', ['motel' => config('motel.name')]))"
                        :label="__('site.contact.whatsapp')" />

                    <a href="{{ config('motel.instagram_url') }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-purple-600 to-pink-500 px-6 py-3 text-base font-semibold text-white transition hover:opacity-90">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        {{ __('site.contact.instagram') }}
                    </a>
                </div>

                <a href="{{ config('motel.google_maps_link') }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="mt-6 inline-block text-sm font-medium text-ocean-mid hover:text-ocean-deep">
                    {{ __('site.contact.open_maps') }}
                </a>
            </div>
        </div>

        <div class="mt-12 grid gap-10 lg:grid-cols-2">
            <div>
                <h2 class="text-xl font-semibold text-ocean-deep">{{ __('site.contact.directions_title') }}</h2>
                <ul class="mt-6 space-y-4">
                    @foreach (__('motel.directions') as $direction)
                        <li class="rounded-xl border border-sand-mid/40 bg-white p-5 shadow-sm">
                            <h3 class="font-semibold text-ocean-deep">{{ $direction['from'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-ocean-deep/75">{{ $direction['steps'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="rounded-2xl border border-sand-mid/40 bg-white p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-ocean-deep">{{ __('site.contact.form_title') }}</h2>
                <form action="{{ route('contact.store') }}" method="POST" class="mt-6 space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-ocean-deep">
                            {{ __('site.contact.form_name') }} <span class="text-ocean-mid">*</span>
                        </label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                               class="mt-1 w-full rounded-xl border border-sand-mid/60 px-4 py-2.5 text-ocean-deep focus:border-ocean-mid focus:outline-none focus:ring-1 focus:ring-ocean-mid">
                        @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-ocean-deep">{{ __('site.contact.form_phone') }}</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                               class="mt-1 w-full rounded-xl border border-sand-mid/60 px-4 py-2.5 text-ocean-deep focus:border-ocean-mid focus:outline-none focus:ring-1 focus:ring-ocean-mid">
                        @error('phone')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-ocean-deep">{{ __('site.contact.form_email') }}</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               class="mt-1 w-full rounded-xl border border-sand-mid/60 px-4 py-2.5 text-ocean-deep focus:border-ocean-mid focus:outline-none focus:ring-1 focus:ring-ocean-mid">
                        @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-ocean-deep">
                            {{ __('site.contact.form_message') }} <span class="text-ocean-mid">*</span>
                        </label>
                        <textarea name="message" id="message" rows="4" required
                                  class="mt-1 w-full rounded-xl border border-sand-mid/60 px-4 py-2.5 text-ocean-deep focus:border-ocean-mid focus:outline-none focus:ring-1 focus:ring-ocean-mid">{{ old('message') }}</textarea>
                        @error('message')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="w-full rounded-xl bg-[#25D366] px-6 py-3 font-semibold text-white transition hover:bg-[#1da851] sm:w-auto">
                        {{ __('site.contact.form_submit') }}
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-12">
            <x-stay-info compact />
        </div>
    </section>
@endsection
