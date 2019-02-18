<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
      'address',
      'gender',
      'birth_date',
      'cpf',
      'work_place',
      'home_phone',
      'work_phone',
      'mobile_phone'
    ];
}