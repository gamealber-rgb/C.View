@extends('layouts.app')

@section('title', __('site.rooms.title').' — '.config('motel.name'))
@section('meta_description', __('site.rooms.meta_description'))

@section('content')
    <section class="bg-gradient-to-r from-ocean-deep to-ocean-mid px-4 py-14 text-white sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h1 class="text-3xl font-bold sm:text-4xl">{{ __('site.rooms.heading') }}</h1>
            <p class="mt-2 max-w-2xl text-white/85">{{ __('site.rooms.subtitle') }}</p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-10 sm:px-6">
        <div id="floor-filter" class="flex flex-wrap gap-3" role="tablist" aria-label="{{ __('site.rooms.filter_label') }}">
            <button type="button" data-floor="all" class="floor-filter-btn active rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="true">{{ __('site.rooms.all_floors') }}</button>
            <button type="button" data-floor="1" class="floor-filter-btn rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="false">{{ __('site.rooms.ground_floor') }}</button>
            <button type="button" data-floor="2" class="floor-filter-btn rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="false">{{ __('site.rooms.second_floor') }}</button>
            <button type="button" data-floor="3" class="floor-filter-btn rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="false">{{ __('site.rooms.third_floor') }}</button>
            <button type="button" data-floor="4" class="floor-filter-btn rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="false">{{ __('site.rooms.suite_floor') }}</button>
        </div>

        <div id="rooms-grid" class="mt-8 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($rooms as $room)
                <x-room-card :room="$room" />
            @endforeach
        </div>

        <p id="rooms-empty" class="mt-8 hidden text-center text-ocean-deep/60">{{ __('site.rooms.no_results') }}</p>

        <div class="mt-8">
            <x-stay-info compact />
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/rooms-filter.js') }}"></script>
@endpush

@push('styles')
    <style>
        .floor-filter-btn { background: white; color: #0A4D68; border: 1px solid #E8C547; }
        .floor-filter-btn.active { background: #088395; color: white; border-color: #088395; }
        .floor-filter-btn:hover:not(.active) { background: #F5E6C8; }
    </style>
@endpush
