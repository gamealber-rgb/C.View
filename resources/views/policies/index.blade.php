@extends('layouts.app')

@section('title', __('site.policies.title').' — '.config('motel.name'))
@section('meta_description', __('site.policies.meta_description'))

@section('content')
    <section class="bg-gradient-to-r from-ocean-mid to-[#3699a1] px-4 py-14 text-white sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h1 class="text-3xl font-bold sm:text-4xl">{{ __('site.policies.heading') }}</h1>
            <p class="mt-2 max-w-2xl text-white/85">{{ __('site.policies.subtitle') }}</p>
        </div>
    </section>

    <section class="mx-auto max-w-3xl space-y-10 px-4 py-12 sm:px-6">
        <article id="privacy" class="scroll-mt-24 rounded-2xl border border-sand-mid/40 bg-white p-8 shadow-sm">
            <h2 class="text-xl font-bold text-ocean-deep">{{ __('site.policies.privacy_title') }}</h2>
            <p class="mt-4 leading-relaxed text-ocean-deep/75">{{ __('motel.policies.privacy') }}</p>
        </article>

        <article id="terms" class="scroll-mt-24 rounded-2xl border border-sand-mid/40 bg-white p-8 shadow-sm">
            <h2 class="text-xl font-bold text-ocean-deep">{{ __('site.policies.terms_title') }}</h2>
            <p class="mt-4 leading-relaxed text-ocean-deep/75">{{ __('motel.policies.terms') }}</p>
        </article>

        <article id="cancellation" class="scroll-mt-24 rounded-2xl border border-sand-mid/40 bg-white p-8 shadow-sm">
            <h2 class="text-xl font-bold text-ocean-deep">{{ __('site.policies.cancellation_title') }}</h2>
            <p class="mt-4 leading-relaxed text-ocean-deep/75">{{ __('motel.cancellation') }}</p>
            <p class="mt-4 leading-relaxed text-ocean-deep/75">{{ __('motel.policies.cancellation_detail') }}</p>
        </article>
    </section>
@endsection
