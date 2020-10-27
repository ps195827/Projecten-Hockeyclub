<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leerfase extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'leerfase';
    //use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
