<?php

namespace App\Http\Controllers\Api\Vehicle;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\VehicleResource;
use App\Services\VehicleService;
use Illuminate\Http\Request;

class VehicleController extends BaseController
{
    /**
     * Handle the incoming request.
     */


    public function __construct(protected VehicleService $service){}

    public function __invoke(Request $request)
    {
        $data = $this->service->getAll();

        $data = VehicleResource::collection($data);

        return $data != null ? $this->sendResponse($data, 'success') : $this->sendError('error');


    }
}
