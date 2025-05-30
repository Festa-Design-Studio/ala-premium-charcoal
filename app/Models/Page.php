<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'template',
        'featured_image',
        'meta_data',
        'is_published',
        'published_at',
        'last_editor_id'
    ];

    protected $casts = [
        'meta_data' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Get the user that last edited the page.
     */
    public function lastEditor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'last_editor_id');
    }

    /**
     * Get the page's featured image URL.
     */
    public function getFeaturedImageUrlAttribute()
    {
        return $this->featured_image
            ? Storage::url($this->featured_image)
            : null;
    }

    /**
     * Get the page's status label.
     */
    public function getStatusLabelAttribute()
    {
        return $this->is_published ? 'Published' : 'Draft';
    }

    /**
     * Get the page's template label.
     */
    public function getTemplateLabelAttribute()
    {
        $templates = [
            'default' => 'Default Template',
            'about' => 'About Page',
            'contact' => 'Contact Page',
            'product' => 'Product Page'
        ];

        return $templates[$this->template] ?? ucfirst($this->template);
    }

    /**
     * Scope a query to only include published pages.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include draft pages.
     */
    public function scopeDraft($query)
    {
        return $query->where('is_published', false);
    }
}
