<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Werkvorm extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'werkvorm';
    // use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
