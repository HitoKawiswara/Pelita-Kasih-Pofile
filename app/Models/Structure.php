<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Structure extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'img', 'name', 'work_as', 'job_desc', 'category'
    ];

    protected $date = [
        'deleted_at'
    ];
}
