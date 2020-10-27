<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minimaleveldoppervlak extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'minimaleveldoppervlak';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
