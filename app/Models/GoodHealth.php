<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodHealth extends Model
{
    use HasFactory;
   protected $table = 'good_healths';
   protected $fillable = 
   [
        'gh_title',
        'gh_details',
        'gh_image',
   ] ;
}
