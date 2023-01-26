<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregories_blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title'
    ];
}
