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
        'img',
        'title',
        'content',
        'will_delete_at'
    ];

    protected $date = [
        'deleted_at'
    ];
}
