<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupFavorite extends Model
{
    protected $table='groups_favorites';
    protected $primaryKey='user_id';
    use SoftDeletes;
    protected $fillable=['user_id','group_id','deleted_at'];
    
    public function groupsfavorites(){
        return $this->belongsTo('App\Models\Group');
    }
}
