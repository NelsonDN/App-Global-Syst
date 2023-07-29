<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batterie extends Model
{
    protected $fillable = ['name', 'courant', 'tension', 'duree_de_vie'];
    
    use HasFactory;
}
