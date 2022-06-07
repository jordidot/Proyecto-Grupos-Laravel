<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConcertFavorite extends Model
{
    protected $table='concert_favorites';
    use SoftDeletes;
    protected $fillable=['user_id','concert_id','deleted_at'];
}
