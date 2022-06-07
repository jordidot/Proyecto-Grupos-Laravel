<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcertTranslation extends Model
{
    protected $fillable=['concert_id', 'locale','title','description'];
    protected $table='concert_translations';
    public function concerts(){
        return $this->belongsTo('App\Models\Concert');
    }
    
}
