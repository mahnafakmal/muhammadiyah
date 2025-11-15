<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'body', 'image', 'published_at', 'user_id', 'is_highlight', 'views'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_highlight' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // Override key untuk route binding agar menggunakan slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Set otomatis slug saat menyimpan post
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = $post->slug ?? Str::slug($post->title);
        });
    }
}