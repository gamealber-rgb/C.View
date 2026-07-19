@extends('layouts.app')

@section('title', __('site.menu.title').' — '.config('motel.name'))
@section('meta_description', __('site.menu.meta_description'))

@section('content')
    <section class="bg-gradient-to-r from-ocean-mid to-[#3699a1] px-4 py-14 text-white sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h1 class="text-3xl font-bold sm:text-4xl">{{ __('site.menu.heading') }}</h1>
            <p class="mt-2 max-w-2xl text-white/85">{{ __('site.menu.subtitle') }}</p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-10 sm:px-6">
        <div class="grid gap-6 lg:grid-cols-2">
            <div class="rounded-2xl border border-sand-mid/40 bg-white p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-ocean-deep">{{ __('site.menu.service_title') }}</h2>
                <dl class="mt-4 space-y-2 text-sm">
                    @foreach (__('motel.menu_service') as $key => $value)
                        <div class="flex justify-between gap-4 border-b border-sand-mid/20 pb-2 last:border-0">
                            <dt class="font-medium text-ocean-deep">{{ __('site.menu.service_'.$key) }}</dt>
                            <dd class="text-end text-ocean-deep/70">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
            <div class="rounded-2xl border border-sand-mid/40 bg-white p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-ocean-deep">{{ __('site.menu.notes_title') }}</h2>
                <ul class="mt-4 space-y-2 text-sm text-ocean-deep/75">
                    @foreach (__('motel.menu_notes') as $note)
                        <li class="flex gap-2">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-ocean-mid" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            {{ $note }}
                        </li>
                    @endforeach
                </ul>
                <div class="mt-6">
                    <x-whatsapp-button
                        :url="\App\Support\WhatsApp::url(__('motel.whatsapp.menu_order'))"
                        :label="__('site.menu.order_whatsapp')"
                        class="w-full sm:w-auto" />
                </div>
            </div>
        </div>

        <div id="menu-main-tabs" class="mt-10 flex flex-wrap gap-2 border-b border-sand-mid/40 pb-4" role="tablist" aria-label="{{ __('site.menu.main_tabs_label') }}">
            <button type="button" id="tab-food" data-main-tab="food" class="menu-tab menu-main-tab active rounded-full px-6 py-2 text-sm font-semibold transition" role="tab" aria-selected="true" aria-controls="panel-food">{{ __('site.menu.food') }}</button>
            <button type="button" id="tab-drinks" data-main-tab="drinks" class="menu-tab menu-main-tab rounded-full px-6 py-2 text-sm font-semibold transition" role="tab" aria-selected="false" aria-controls="panel-drinks">{{ __('site.menu.drinks') }}</button>
        </div>

        <div id="panel-food" class="menu-main-panel mt-8 space-y-4" role="tabpanel" aria-labelledby="tab-food">
            @forelse ($menuItems->get('food', collect()) as $item)
                <x-menu-item-card :item="$item" />
            @empty
                <p class="text-center text-ocean-deep/60">{{ __('site.menu.no_food') }}</p>
            @endforelse
        </div>

        <div id="panel-drinks" class="menu-main-panel mt-8 hidden" role="tabpanel" aria-labelledby="tab-drinks" hidden>
            <div id="drinks-sub-tabs" class="flex flex-wrap gap-2 border-b border-sand-mid/30 pb-4" role="tablist" aria-label="{{ __('site.menu.drinks_tabs_label') }}">
                <button type="button" id="tab-cold" data-drink-tab="cold" class="menu-tab menu-drink-tab active rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="true" aria-controls="panel-cold">{{ __('site.menu.cold') }}</button>
                <button type="button" id="tab-hot" data-drink-tab="hot" class="menu-tab menu-drink-tab rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="false" aria-controls="panel-hot">{{ __('site.menu.hot') }}</button>
                <button type="button" id="tab-alcohol" data-drink-tab="alcohol" class="menu-tab menu-drink-tab rounded-full px-5 py-2 text-sm font-semibold transition" role="tab" aria-selected="false" aria-controls="panel-alcohol">{{ __('site.menu.alcohol') }}</button>
            </div>

            <div id="panel-cold" class="menu-drink-panel mt-8 space-y-4" role="tabpanel" aria-labelledby="tab-cold">
                @forelse ($menuItems->get('cold', collect()) as $item)
                    <x-menu-item-card :item="$item" />
                @empty
                    <p class="text-center text-ocean-deep/60">{{ __('site.menu.no_cold') }}</p>
                @endforelse
            </div>

            <div id="panel-hot" class="menu-drink-panel mt-8 hidden space-y-4" role="tabpanel" aria-labelledby="tab-hot" hidden>
                @forelse ($menuItems->get('hot', collect()) as $item)
                    <x-menu-item-card :item="$item" />
                @empty
                    <p class="text-center text-ocean-deep/60">{{ __('site.menu.no_hot') }}</p>
                @endforelse
            </div>

            <div id="panel-alcohol" class="menu-drink-panel mt-8 hidden space-y-4" role="tabpanel" aria-labelledby="tab-alcohol" hidden>
                @forelse ($menuItems->get('alcohol', collect()) as $item)
                    <x-menu-item-card :item="$item" />
                @empty
                    <p class="text-center text-ocean-deep/60">{{ __('site.menu.no_alcohol') }}</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/menu-tabs.js') }}"></script>
@endpush

@push('styles')
    <style>
        .menu-tab { background: white; color: #3A3632; border: 1px solid #cfc4b8; }
        .menu-tab.active { background: #43bac4; color: white; border-color: #43bac4; }
        .menu-tab:hover:not(.active) { background: #e8ded2; }
    </style>
@endpush
