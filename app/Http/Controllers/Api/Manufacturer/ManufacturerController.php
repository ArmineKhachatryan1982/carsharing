<?php

namespace App\Http\Controllers\Api\Manufacturer;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\ManufacturerResource;
use App\Services\ManufacturerService;
use Illuminate\Http\Request;

class ManufacturerController extends BaseController
{

    public function __construct(protected ManufacturerService $service){}

    public function __invoke(Request $request)
    {
        $data = $this->service->getAll();

        $data = ManufacturerResource::collection($data);

        return $data != null ? $this->sendResponse($data, 'success') : $this->sendError('error');


    }

}
