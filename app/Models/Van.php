<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    use HasFactory;

    protected $fillable = [
        "brand",
        "weight",
        "description",
        "image",
        "color",
        "automatic_gear",
        "release_date",
        "engineCapacity"
    ];
}
