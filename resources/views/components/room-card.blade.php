@props(['room'])

<a href="{{ route('rooms.show', $room) }}"
   class="room-card group block overflow-hidden rounded-2xl border border-sand-mid/40 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md"
   data-floor="{{ $room->floor }}">
    <div class="aspect-[4/3] overflow-hidden bg-ocean-light/20">
        <img src="{{ asset($room->primary_image) }}"
             alt="{{ __('site.rooms.room') }} {{ $room->number }} — {{ $room->localized_name }}"
             class="h-full w-full object-cover transition group-hover:scale-105">
    </div>
    <div class="p-5">
        <div class="flex items-start justify-between gap-2">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wide text-ocean-mid">{{ __('site.rooms.room') }} {{ $room->number }}</p>
                <h3 class="mt-1 text-lg font-semibold text-ocean-deep">{{ $room->localized_name }}</h3>
            </div>
            <span class="rounded-full bg-sand-light px-2.5 py-1 text-xs font-medium text-ocean-deep">
                {{ $room->localized_floor_label }}
            </span>
        </div>
        <p class="mt-2 line-clamp-2 text-sm text-ocean-deep/70">{{ $room->localized_description }}</p>
    </div>
</a>
