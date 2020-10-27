<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intensiteit extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'intensiteit';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
