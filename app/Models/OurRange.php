<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OurRange extends Model
{
    protected $fillable = [
        'our_range_category_id',
        'title',
        'details',
        'description',
        'images',
        'pdf',
        'is_active',
    ];

    protected $casts = [
        'details' => 'array',
        'images' => 'array',
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(OurRangeCategory::class, 'our_range_category_id');
    }
}
