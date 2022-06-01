<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupTranslation extends Model
{
    protected $fillable=['group_id','locale','description'];
}
