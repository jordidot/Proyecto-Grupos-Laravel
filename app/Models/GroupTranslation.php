<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupTranslation extends Model
{
    protected $fillable=['group_id','locale','description'];
    public function groups(){
        return $this->belongsTo('App\Models\Group');
    }
}
