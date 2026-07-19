<?php

namespace App\Support;

trait HasTranslations
{
    protected function localized(string $field): ?string
    {
        $localizedField = $field.'_ar';

        if (app()->getLocale() === 'ar' && filled($this->{$localizedField})) {
            return $this->{$localizedField};
        }

        return $this->{$field};
    }
}
