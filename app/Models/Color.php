<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    const TYPE_COLOR = 0;
    const TYPE_DESIGN = 1;

    use HasFactory;

    protected $fillable = [
        'color_name',
        'image',
        'type',
    ];
}
