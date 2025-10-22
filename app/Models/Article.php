<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Indica quali campi possono essere riempiti in massa (mass assignment)
    protected $fillable = [
        'title',
        'category',
        'body',
        'image_path'
    ];
}
