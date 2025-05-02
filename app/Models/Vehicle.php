<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded=[];


    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class,'manufacturer_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function car_model() {
        return $this->belongsTo(CarModel::class,'car_model_id');
    }
}
