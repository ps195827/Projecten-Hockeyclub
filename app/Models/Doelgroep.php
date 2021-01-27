<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doelgroep extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'doelgroep';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function team(){
        return $this->hasMany('App\Models\Team');
    }

    public function oefening(){
        return $this->belongsToMany('App\Models\Oefening');
    }

}
