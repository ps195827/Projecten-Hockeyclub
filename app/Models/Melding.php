<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Melding extends Model
{
    protected $fillable = ['titel','onderwerp','omschrijving','melder'];

    protected $table = 'melding';
    // use HasFactory;

    public function users() {
        return $this->belongsTo('App\Models\User','melder','id');
    }
}
