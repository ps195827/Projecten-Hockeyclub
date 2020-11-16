<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $fillable = ['titel','omschrijving','image'];

    protected $table = 'foto';
    // use HasFactory;
}
