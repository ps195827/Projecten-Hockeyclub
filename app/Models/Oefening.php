<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefening extends Model
{
    protected $fillable = ['titel','domein_id','sector_id','subsector_id','leerfase_id','moeilijkheidsgraad',
      'beschrijving','intensiteit_id','spelfase_id','trainingsonderdeel_id','uitvoering_id',
      'minimaleveldoppervlak_id','minimalegroepsgrootte','maximalegroepsgrootte','duur','organisatie',
      'keeper','hesjes','pilonnen','dopjes','goaltjes','goals','hulpmiddelen','aandachtspunten','fouten',
      'verzwaring','doelgroep_id','filmpje','afbeelding','auteur','slug'];

    protected $table = 'oefening';

    public function domein(){
        return $this->belongsTo('App\Models\domein');
    }

    public function sector(){
        return $this->belongsTo('App\Models\sector');
    }

    public function subsector(){
        return $this->belongsTo('App\Models\subsector');
    }

    public function leerfase(){
        return $this->belongsTo('App\Models\leerfase');
    }

    public function intensiteit(){
        return $this->belongsTo('App\Models\intensiteit');
    }

    public function spelfase(){
        return $this->belongsTo('App\Models\spelfase');
    }
    
    public function trainingsonderdeel(){
        return $this->belongsTo('App\Models\trainingsonderdeel');
    }

    public function uitvoering(){
        return $this->belongsTo('App\Models\uitvoering');
    }

    public function minimaleveldoppervlak(){
        return $this->belongsTo('App\Models\minimaleveldoppervlak');
    }

    public function doelgroep(){
        return $this->belongsTo('App\Models\doelgroep');
    }

    public function users() {
        return $this->belongsTo('App\Models\User','auteur','id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
