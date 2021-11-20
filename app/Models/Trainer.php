<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $appends = ['twitter'];
    protected $fillable =
    [
        'tr_name',
        'tr_title',
        'tr_image',
    ];

    public function getTwitterAttribute()
    {
        return $this->attributes['tr_name'] == 'Millie Harper' ? true : false;
    }
}
