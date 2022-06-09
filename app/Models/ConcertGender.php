<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcertGender extends Model
{

    protected $fillable = ['id_concert', 'id_gender'];
    protected $table = 'concerts_genders';
}
