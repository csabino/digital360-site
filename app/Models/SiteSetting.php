<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'card_frame_color',
        'product_carousel_seconds',
    ];

    public static function current(): self
    {
        return static::query()->firstOrCreate([], [
            'card_frame_color' => '#f5f3ff',
            'product_carousel_seconds' => 5,
        ]);
    }
}
