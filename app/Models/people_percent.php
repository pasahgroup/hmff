<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people_percent extends Model
{
    use HasFactory;
     protected $fillable = [
        'percent_name',
        'percent',
        'user_id'
    ];
}
