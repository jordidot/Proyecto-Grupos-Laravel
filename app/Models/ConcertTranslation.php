<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcertTranslation extends Model
{
    protected $fillable=['concert_id', 'locale','title','description'];

    public function concerts(){
        return $this->belongsTo('App\Models\Concert');
    }
    
}
