<?php

if (! function_exists('whatsapp_url')) {
    function whatsapp_url(?string $message = null): string
    {
        $message ??= 'Olá! Vim pelo site da digital360 e gostaria de saber mais.';

        return 'https://wa.me/' . config('services.whatsapp.number') . '?text=' . urlencode($message);
    }
}
