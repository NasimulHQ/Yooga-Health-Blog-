<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnyQuery extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'phone',
        'email',
        'q_icon'
    ];
}
