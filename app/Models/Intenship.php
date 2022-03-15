<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intenship extends Model
{
    use HasFactory;

    
    public function corporate()
    {
        //return $this->belongsTo('App\Models\Tag');
        return $this->belongsTo('App\Models\Corporate','corporate_id');
    }
}
