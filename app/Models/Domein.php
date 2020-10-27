<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domein extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'domein';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
