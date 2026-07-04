<?php

namespace App\Models;

use App\Support\HasTranslations;
use App\Support\WhatsApp;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasTranslations;

    protected $fillable = [
        'number',
        'floor',
        'name',
        'name_ar',
        'slug',
        'description',
        'description_ar',
        'price_per_night',
        'capacity',
        'bed_type',
        'bed_type_ar',
        'amenities',
        'amenities_ar',
        'images',
        'is_available',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'amenities' => 'array',
            'amenities_ar' => 'array',
            'images' => 'array',
            'price_per_night' => 'decimal:2',
            'is_available' => 'boolean',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'number';
    }

    public function scopeForFloor(Builder $query, int $floor): Builder
    {
        return $query->where('floor', $floor);
    }

    public function getLocalizedNameAttribute(): string
    {
        return $this->localized('name');
    }

    public function getLocalizedDescriptionAttribute(): string
    {
        return $this->localized('description');
    }

    public function getLocalizedBedTypeAttribute(): string
    {
        return $this->localized('bed_type');
    }

    public function getLocalizedAmenitiesAttribute(): array
    {
        if (app()->getLocale() === 'ar' && filled($this->amenities_ar)) {
            return $this->amenities_ar;
        }

        return $this->amenities ?? [];
    }

    public function getWhatsappBookingUrlAttribute(): string
    {
        $message = __('motel.whatsapp.booking', [
            'number' => $this->number,
            'name' => $this->localized_name,
            'motel' => config('motel.name'),
        ]);

        return WhatsApp::url($message);
    }

    public function getPrimaryImageAttribute(): string
    {
        $images = $this->images ?? [];

        return $images[0] ?? 'images/rooms/placeholder.svg';
    }

    public function getLocalizedFloorLabelAttribute(): string
    {
        return match ($this->floor) {
            1 => __('site.rooms.ground_floor'),
            2 => __('site.rooms.second_floor'),
            3 => __('site.rooms.third_floor'),
            4 => __('site.rooms.suite_floor'),
            default => __('site.rooms.floor').' '.$this->floor,
        };
    }
}
