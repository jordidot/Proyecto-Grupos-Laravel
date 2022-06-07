<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    protected $fillable=['user_id', 'concert_id', 'comment'];
    protected $table = 'users_comments'; 
}
