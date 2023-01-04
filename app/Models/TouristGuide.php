<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_num',
        'stars_rated',
        'image_path'
    ];
}
