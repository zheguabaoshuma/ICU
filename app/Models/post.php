<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $connection = 'postDB';
    protected $fillable = [
        'title',
        'content',
        'is_published',
        'published_at',
    ];

}
