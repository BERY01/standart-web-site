<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    use HasFactory;
    function getContent(){
        return $this->hasOne('App\Models\page','id','content');
    }
}
