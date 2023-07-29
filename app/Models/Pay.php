<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class Pay extends Model
{
    protected $fillable = ['name'];
    use HasFactory;

    public function regions() 
    {
        return $this->hasMany(Region::class);
    }
}
