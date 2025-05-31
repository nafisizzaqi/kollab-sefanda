<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'title',
        'description',
        'image',
        'name',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value ? asset('storage/' . $value) : null,
        );
    }
}