<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'manufacture_name' => $this->manufacturer->name,
            'brand_name' => $this->brand->name,
            'car_model_name' => $this->car_model->name,
            'color' => $this->color,
            'year' => $this->year,
        ];
    }
}
