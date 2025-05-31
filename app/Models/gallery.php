<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gallery extends Model

{
    use HasFactory;

    protected $fillable = [

        'image',
        'title',
        'description',

    ];

    protected function logo(): Attribute
    {
        return Attribute::make(
            get: fn($value) => url('storage/' . $value),
        );
    }

    protected static function booted()
    {
        static::creating(function ($gallery) {
            $gallery->slug = Str::slug($gallery->title);
        });
    }
}
