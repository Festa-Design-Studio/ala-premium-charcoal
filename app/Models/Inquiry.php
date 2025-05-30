<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inquiry extends Model
{
    protected $fillable = [
        'company_name',
        'contact_name',
        'email',
        'phone',
        'country',
        'message',
        'product_id',
        'status',
        'additional_info'
    ];

    protected $casts = [
        'additional_info' => 'array'
    ];

    /**
     * Get the product that the inquiry is about.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
