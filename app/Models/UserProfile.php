<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use SoftDeletes;
    protected $fillable=['user_id', 'first_name', 'last_name','city', 'image_user','image_banner','deleted_at'];
}
