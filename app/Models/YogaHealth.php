<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YogaHealth extends Model
{
    use HasFactory;
    protected $table = 'yoga_healths';
    protected $fillable =
    [
        'y_name',
        'y_details',
        'icon'
    ];
}
