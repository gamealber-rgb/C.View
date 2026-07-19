@php
    $locale = app()->getLocale();
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Hotel',
        'name' => config('motel.name'),
        'description' => __('motel.description'),
        'url' => config('motel.url'),
        'telephone' => config('motel.phone'),
        'email' => config('motel.email'),
        'image' => asset('images/logo.png'),
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Tartus',
            'addressRegion' => 'Tartus',
            'addressCountry' => 'SY',
            'streetAddress' => __('motel.address'),
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 34.9167,
            'longitude' => 35.8667,
        ],
        'checkinTime' => '13:00',
        'checkoutTime' => '12:00',
        'numberOfRooms' => 10,
        'amenityFeature' => [
            ['@type' => 'LocationFeatureSpecification', 'name' => 'Free WiFi', 'value' => true],
            ['@type' => 'LocationFeatureSpecification', 'name' => 'Air Conditioning', 'value' => true],
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            'opens' => '00:00',
            'closes' => '23:59',
        ],
        'sameAs' => array_filter([
            config('motel.instagram_url'),
            config('motel.google_maps_link'),
        ]),
        'inLanguage' => [$locale === 'ar' ? 'ar' : 'en'],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
