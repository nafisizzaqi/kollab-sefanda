<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'title',
        'description',
        'visi',
        'misi',
    ];

    protected $casts = [
        'misi' => 'array', // otomatis decode JSON ke array
    ];
}
