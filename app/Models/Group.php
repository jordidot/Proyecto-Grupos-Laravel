<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use Translatable;
    use SoftDeletes;
    protected $translatedAttributes=['description'];
    protected $fillable=['title','image_group','banner_group','deleted_at'];
    public function groupsfavorites(){
        return $this->hasMany('App\Models\GroupFavorite');
    }
}
