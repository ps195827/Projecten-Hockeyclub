<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Oefening extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['titel','domein_id','sector_id','subsector_id','leerfase_id','moeilijkheidsgraad_id',
      'beschrijving','spelfase_id','trainingsonderdeel_id','duur','hulpmiddelen','aandachtspunten','werkvorm_id',
      'fouten','filmpje','afbeelding','makkelijkmaken','moeilijkmaken','tips','auteur','slug'];

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

    public function users() {
        return $this->belongsTo('App\Models\User','auteur','id');
    }

    public function moeilijkheidsgraad() {
        return $this->belongsTo('App\Models\Moeilijkheidsgraad');
    }

    public function werkvorm(){
        return $this->belongsTo('App\Models\Werkvorm');
    }

    public function doelgroep(){
        return $this->belongsToMany('App\Models\Doelgroep');
    }
}
