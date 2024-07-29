<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory as FactoriesHasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Tipousuario extends Model
{
    use FactoriesHasFactory;

    protected $fillable = [
        'nome'
    ];
}
