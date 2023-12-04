<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'color', 'img', 'img1', 'img2'];

    protected $date = ['deleted_at'];
}
