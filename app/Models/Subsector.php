<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsector extends Model
{
    protected $fillable = ['name','sector_id'];

    protected $table = 'subsector';
    // use HasFactory;

    public function Sector(){
        return $this->belongsTo('App\Models\Sector');
    }
}
