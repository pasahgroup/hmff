<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class student extends Model
{
    use HasFactory;
     protected $fillable = [
     	'pin',
        'addmission_no',
        'class',
        'session',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'birth_date',
        'religion',
        'mobile_no',
        'email',
        'photo',
        'education_level',
        'graduate',
        'parental_status',
        'tribe',

      'marital_status',
'place_origin',
'current_residence',
'no_children',

        'designation',
        'location',
        'gurdian_name',
        'relationship',
        'guardian_mobile',
        'status',
        'user_id'
    ];

        public static function getAsset($n){

      $value = DB::select('select id,session from sessions where class_name="'.$n.'" order by class_name');

//dd($value);
      return $value;
    }
}
