<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupFavorite extends Model
{
    use SoftDeletes;
    protected $fillable=['user_id','group_id','deleted_at'];
}
