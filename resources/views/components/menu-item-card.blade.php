@props(['item'])

<article class="flex gap-4 rounded-2xl border border-sand-mid/40 bg-white p-4 shadow-sm sm:p-5">
    <div class="h-20 w-20 shrink-0 overflow-hidden rounded-xl bg-sand-light sm:h-24 sm:w-24">
        <img src="{{ asset($item->image ?? 'images/menu/placeholder.svg') }}"
             alt="{{ $item->localized_name }}"
             class="h-full w-full object-cover">
    </div>
    <div class="min-w-0 flex-1">
        <h3 class="font-semibold text-ocean-deep">{{ $item->localized_name }}</h3>
        @if ($item->localized_description)
            <p class="mt-1 text-sm text-ocean-deep/70">{{ $item->localized_description }}</p>
        @endif
    </div>
</article>
