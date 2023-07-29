<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pay;
use App\Models\Ville;


class Region extends Model
{
    protected $fillable = ['name', 'pay_id'];

    use HasFactory;
    
    public function pay() 
    {
        return $this->belongsTo(Pay::class);
    }

    public function villes() 
    {
        return $this->hasMany(Ville::class);
    }
}
