@props(['service'])

@php
    $whatsappUrl = \App\Support\WhatsApp::url($service['whatsapp_message']);
@endphp

<article class="flex flex-col rounded-2xl border border-sand-mid/40 bg-white p-6 shadow-sm">
    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-ocean-light/20 text-ocean-mid">
        @if ($service['icon'] === 'laundry')
            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4h16v16H4z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 8h8M8 12h8M8 16h5"/></svg>
        @else
            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v18M3 12h18"/><circle cx="12" cy="12" r="3" stroke-width="1.5"/></svg>
        @endif
    </div>
    <h3 class="mt-5 text-xl font-semibold text-ocean-deep">{{ $service['name'] }}</h3>
    <p class="mt-2 flex-1 text-sm leading-relaxed text-ocean-deep/70">{{ $service['description'] }}</p>
    <p class="mt-4 text-xs font-medium uppercase tracking-wide text-ocean-mid">{{ $service['hours'] }}</p>
    <a href="{{ $whatsappUrl }}"
       target="_blank"
       rel="noopener noreferrer"
       class="mt-5 inline-flex items-center justify-center rounded-xl bg-[#25D366] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#1da851]">
        {{ __('site.services.request_whatsapp') }}
    </a>
</article>
