<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['titel','opmerking','trainingdatum','auteur','team_id'];

    protected $table = 'training';
    //use HasFactory;

    public function team(){
        return $this->belongsTo('App\Models\team');
    }

    public function doelgroep(){
        return $this->belongsTo('App\Models\doelgroep');
    }

    public function oefening(){
        return $this->belongsToMany('App\Models\Oefening');
    }

    public function users() {
        return $this->belongsTo('App\Models\User','auteur','id');
    }
}
