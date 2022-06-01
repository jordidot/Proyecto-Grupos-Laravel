<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use Translatable;
    use SoftDeletes;
    protected $fillable=['title','description','image_group','banner_group','deleted_at'];
}
