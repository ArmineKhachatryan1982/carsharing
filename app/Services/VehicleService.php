<?php
namespace App\Services;

use App\Interfaces\VehicleInterface;

class VehicleService
{
    public function __construct(protected VehicleInterface $vehicleRepository){}

    public function getAll(){
        
        return $this->vehicleRepository->index();
    }

}

