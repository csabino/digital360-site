<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'card_frame_color',
    ];

    public static function current(): self
    {
        return static::query()->firstOrCreate([], [
            'card_frame_color' => '#f5f3ff',
        ]);
    }
}
