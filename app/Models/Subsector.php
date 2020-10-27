<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsector extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'subsector';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
