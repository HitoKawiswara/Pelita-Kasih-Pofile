<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ekstrakurikuler extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ekstrakurikuler';
    protected $fillable = ['nama', 'description', 'image_path'];

    protected $casts = [
        'image_path' => 'json',
    ];
}
