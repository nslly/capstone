<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaqueEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_event',
        'description'
    ];
}
