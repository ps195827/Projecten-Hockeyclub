<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moeilijkheidsgraad extends Model
{
    protected $fillable = ['name','slug'];

    protected $table = 'moeilijkheidsgraad';
    //use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
