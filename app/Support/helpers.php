<?php

if (! function_exists('whatsapp_url')) {
    function whatsapp_url(?string $message = null): string
    {
        $message ??= 'Olá! Vim pelo site da digital360 e gostaria de saber mais.';

        return 'https://wa.me/' . config('services.whatsapp.number') . '?text=' . urlencode($message);
    }
}

if (! function_exists('card_frame_color')) {
    function card_frame_color(): string
    {
        return \Illuminate\Support\Facades\Cache::rememberForever(
            'site_setting_card_frame_color',
            fn () => \App\Models\SiteSetting::current()->card_frame_color
        );
    }
}
