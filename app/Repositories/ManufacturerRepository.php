<?php

namespace App\Repositories;

use App\Interfaces\ManufacturerInterface;
use App\Models\Manufacturer;

class ManufacturerRepository implements ManufacturerInterface
{
    public function index(){
        return Manufacturer::all();
    }
}
