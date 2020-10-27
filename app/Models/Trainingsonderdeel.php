<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainingsonderdeel extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'trainingsonderdeel';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
