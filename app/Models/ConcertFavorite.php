<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcertFavorite extends Model
{
    protected $table='concerts_favorites';
    protected $primaryKey='user_id';
    protected $fillable=['user_id','concert_id','deleted_at'];
}
