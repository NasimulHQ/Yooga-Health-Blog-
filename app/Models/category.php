<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_slug',
    ];
    protected $appends = ['Post_Count'];
    public function getPostCountAttribute()
    {
        return rand(10, 50);
    }
}
