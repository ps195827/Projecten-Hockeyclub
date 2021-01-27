<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mededeling extends Model
{
    protected $fillable = ['titel','omschrijving','auteur'];

    protected $table = 'mededeling';
    // use HasFactory;

    public function users() {
        return $this->belongsTo('App\Models\User','auteur','id');
    }
}
