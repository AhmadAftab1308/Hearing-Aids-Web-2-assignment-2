<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HearingAid extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'instrument',
        'price_per_pair',
        'rechargeable',
        'sound_quality',
        'suitability_active_lifestyles',
        'suitability_small_groups',
        'social_situations',
        'description',
    ];

    protected $casts = [
        'rechargeable' => 'boolean',
        'price_per_pair' => 'decimal:2',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
