<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkademikImg extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'type'];
}
