<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'thumbnail',
        'img1',
        'img2',
        'title',
        'content',
        'duration'
    ];

    protected $date = [
        'deleted_at'
    ];
}
