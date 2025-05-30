<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'specifications',
        'image_path',
        'is_featured',
        'is_active',
        'meta_data'
    ];

    protected $casts = [
        'meta_data' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];

    /**
     * Get the inquiries for the product.
     */
    public function inquiries(): HasMany
    {
        return $this->hasMany(Inquiry::class);
    }
}
