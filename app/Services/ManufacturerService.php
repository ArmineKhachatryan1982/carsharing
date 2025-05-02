<?php
namespace App\Services;

use App\Interfaces\ManufacturerInterface;


class ManufacturerService
{
    public function __construct(protected ManufacturerInterface $repository){
  
    }

    public function getAll(){

        return $this->repository->index();
    }

}
