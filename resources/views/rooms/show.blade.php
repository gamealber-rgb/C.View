@extends('layouts.app')

@section('title', __('site.rooms.show_title', ['number' => $room->number]).' — '.config('motel.name'))
@section('meta_description', $room->localized_description)

@section('content')
    <section class="mx-auto max-w-6xl px-4 py-10 sm:px-6">
        <a href="{{ route('rooms.index') }}" class="inline-flex items-center gap-1 text-sm font-medium text-ocean-mid hover:text-ocean-deep">
            <svg class="h-4 w-4 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            {{ __('site.rooms.back') }}
        </a>

        <div class="mt-6 grid gap-10 lg:grid-cols-2">
            <div>
                <div class="overflow-hidden rounded-2xl border border-sand-mid/40 bg-white shadow-sm">
                    <img id="room-main-image"
                         src="{{ asset($room->images[0] ?? 'images/rooms/placeholder.svg') }}"
                         alt="{{ __('site.rooms.room') }} {{ $room->number }}"
                         class="aspect-[4/3] w-full object-cover">
                </div>
                @if (count($room->images) > 1)
                    <div class="mt-3 flex gap-2" id="room-gallery-thumbs">
                        @foreach ($room->images as $index => $image)
                            <button type="button"
                                    data-image="{{ asset($image) }}"
                                    class="room-thumb overflow-hidden rounded-lg border-2 {{ $index === 0 ? 'border-ocean-mid' : 'border-transparent' }} focus:border-ocean-mid focus:outline-none"
                                    aria-label="{{ __('site.rooms.view_image', ['num' => $index + 1]) }}">
                                <img src="{{ asset($image) }}" alt="" class="h-16 w-20 object-cover">
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>

            <div>
                <p class="text-sm font-semibold uppercase tracking-wide text-ocean-mid">{{ __('site.rooms.room') }} {{ $room->number }} · {{ $room->localized_floor_label }}</p>
                <h1 class="mt-2 text-3xl font-bold text-ocean-deep">{{ $room->localized_name }}</h1>
                <p class="mt-4 leading-relaxed text-ocean-deep/75">{{ $room->localized_description }}</p>

                <dl class="mt-6 grid grid-cols-2 gap-4 rounded-xl bg-white p-5 shadow-sm">
                    <div>
                        <dt class="text-xs font-semibold uppercase text-ocean-mid">{{ __('site.rooms.capacity') }}</dt>
                        <dd class="mt-1 font-medium">{{ $room->capacity }} {{ __('site.rooms.guests') }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-semibold uppercase text-ocean-mid">{{ __('site.rooms.bed_type') }}</dt>
                        <dd class="mt-1 font-medium">{{ $room->localized_bed_type }}</dd>
                    </div>
                </dl>

                <h2 class="mt-6 text-sm font-semibold uppercase tracking-wide text-ocean-mid">{{ __('site.rooms.amenities') }}</h2>
                <ul class="mt-3 flex flex-wrap gap-2">
                    @foreach ($room->localized_amenities as $amenity)
                        <li class="rounded-full bg-sand-light px-3 py-1 text-sm text-ocean-deep">{{ $amenity }}</li>
                    @endforeach
                </ul>

                <div class="mt-8">
                    <x-whatsapp-button :url="$room->whatsapp_booking_url" :label="__('site.whatsapp.book')" class="w-full sm:w-auto" />
                </div>
            </div>
        </div>

        @if ($similarRooms->isNotEmpty())
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-ocean-deep">{{ __('site.rooms.similar_title') }}</h2>
                <div class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-3">
                    @foreach ($similarRooms as $similar)
                        <x-room-card :room="$similar" />
                    @endforeach
                </div>
            </div>
        @endif
    </section>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.room-thumb').forEach(function (btn) {
            btn.addEventListener('click', function () {
                document.getElementById('room-main-image').src = this.dataset.image;
                document.querySelectorAll('.room-thumb').forEach(function (t) {
                    t.classList.remove('border-ocean-mid');
                    t.classList.add('border-transparent');
                });
                this.classList.remove('border-transparent');
                this.classList.add('border-ocean-mid');
            });
        });
    </script>
@endpush
