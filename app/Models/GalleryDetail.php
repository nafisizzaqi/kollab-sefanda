<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalleryDetail extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'image',
        'description2',

    ];

    protected static function booted()
    {
        static::creating(function ($galleryDetail) {
            $galleryDetail->slug = Str::slug($galleryDetail->title);
        });
    }
}
