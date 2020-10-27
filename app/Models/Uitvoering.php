<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uitvoering extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'uitvoering';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
