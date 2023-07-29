<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class Ville extends Model
{
    protected $fillable = ['name', 'coefCorrection' ,'region_id'];

    use HasFactory;

    public function region() 
    {
        return $this->belongsTo(Region::class);
    }
}
