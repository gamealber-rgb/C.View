<div class="border-b border-sand-mid/30 bg-ocean-deep text-white">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-center gap-x-6 gap-y-2 px-4 py-2 text-xs sm:text-sm sm:px-6">
        @foreach (__('motel.info_bar') as $item)
            <span class="flex items-center gap-1.5 text-white/90">
                <svg class="h-3.5 w-3.5 shrink-0 text-sand-mid" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                {{ $item }}
            </span>
        @endforeach
    </div>
</div>
