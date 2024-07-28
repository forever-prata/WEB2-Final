<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
// Import other necessary classes from MongoDB\Laravel as needed

class Produto extends Model
{

    protected $fillable = [
        'nome',
        'valor',
        'categoria',
    ];
}