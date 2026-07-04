@extends('layouts.app')

@section('title', __('site.services.title').' — '.config('motel.name'))
@section('meta_description', __('site.services.meta_description'))

@section('content')
    <section class="bg-gradient-to-r from-ocean-deep to-ocean-mid px-4 py-14 text-white sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h1 class="text-3xl font-bold sm:text-4xl">{{ __('site.services.heading') }}</h1>
            <p class="mt-2 max-w-2xl text-white/85">{{ __('site.services.subtitle') }}</p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-12 sm:px-6">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <x-service-card :service="$service" />
            @endforeach
        </div>
    </section>
@endsection
