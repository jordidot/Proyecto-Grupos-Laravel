<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;

class Concert extends Model
{
    protected $fillable=['group_id', 'schedule', 'date','city', 'image', 'deleted_at'];
    use SoftDeletes;
    use Translatable;
    protected $translatedAttributes = ['title','description'];
}
