<?php

namespace App\Repositories;

use App\Interfaces\VehicleInterface;
use App\Models\Vehicle;

class VehicleRepository implements VehicleInterface
{
    public function index(){
        return Vehicle::all();
    }
}
