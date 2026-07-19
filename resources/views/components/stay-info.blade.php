@props(['compact' => false])

@php
    $stay = __('motel.stay');
    $items = [
        ['label' => __('site.stay.check_in'), 'value' => $stay['check_in']],
        ['label' => __('site.stay.check_out'), 'value' => $stay['check_out']],
        ['label' => __('site.stay.payment'), 'value' => $stay['payment']],
        ['label' => __('site.stay.parking'), 'value' => $stay['parking']],
        ['label' => __('site.stay.breakfast'), 'value' => $stay['breakfast']],
        ['label' => __('site.stay.children'), 'value' => $stay['children']],
        ['label' => __('site.stay.pets'), 'value' => $stay['pets']],
        ['label' => __('site.stay.hookah'), 'value' => $stay['hookah']],
        ['label' => __('site.stay.visitors'), 'value' => $stay['visitors']],
        ['label' => __('site.stay.languages'), 'value' => $stay['languages']],
        ['label' => __('site.stay.cancellation'), 'value' => __('motel.cancellation')],
    ];
@endphp

<div {{ $attributes->merge(['class' => 'rounded-2xl border border-sand-mid/40 bg-white p-6 shadow-sm']) }}>
    <dl class="grid gap-4 {{ $compact ? 'sm:grid-cols-2' : 'sm:grid-cols-2 lg:grid-cols-3' }}">
        @foreach ($items as $item)
            <div>
                <dt class="text-xs font-semibold uppercase tracking-wide text-ocean-mid">{{ $item['label'] }}</dt>
                <dd class="mt-1 text-sm leading-relaxed text-ocean-deep/80">{{ $item['value'] }}</dd>
            </div>
        @endforeach
    </dl>
</div>
