<?php

namespace App\Support;

class WhatsApp
{
    public static function url(string $message): string
    {
        $whatsapp = preg_replace('/\D/', '', config('motel.whatsapp'));

        return 'https://wa.me/'.$whatsapp.'?text='.rawurlencode($message);
    }
}
