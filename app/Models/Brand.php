<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded=[];
    
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    public function car_models()
    {
        return $this->hasMany(CarModel::class);
    }
}
