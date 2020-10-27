<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'tag';
    //use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
