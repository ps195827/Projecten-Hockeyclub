<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotheek extends Model
{
    use HasFactory;

    public function document(){
        return $this->belongsTo('App\Models\document');
    }
}
