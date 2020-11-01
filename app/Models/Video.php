<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['titel','omschrijving','link'];

    protected $table = 'video';
    // use HasFactory;
}
