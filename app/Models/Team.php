<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name','doelgroep_id'];

    protected $table = 'team';

    public function doelgroep(){
        return $this->belongsTo('App\Models\Doelgroep');
    }

    public function user(){
        return $this->belongsToMany('App\Models\User');
    }
}
