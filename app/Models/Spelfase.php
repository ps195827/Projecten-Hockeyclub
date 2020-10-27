<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spelfase extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'spelfase';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
