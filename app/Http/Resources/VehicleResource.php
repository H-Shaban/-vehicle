<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [
            'id'=>$this->id,
            'file'=>$this->file,
            'purchase_date'=>$this->purchase_date,
            'year'=>$this->year,
            'make'=>$this->make,
            'model'=>$this->model,
            'trim'=>$this->trim,
            'color'=>$this->color,
            'vin'=>$this->vin,
            'km'=>$this->km,
            'purchase_price'=>$this->purchase_price,
            'selling_price'=>$this->selling_price,
            'tax'=>$this->tax,
            'pay_by'=>$this->pay_by,
            'note'=>$this->note,
            'purchase_price_with_tax'=>$this->purchase_price_with_tax,
            'purchase_tax_value'=>$this->purchase_tax_value,
            'cost'=> ($this->purchase_price+$this->steps->sum('labor'))
        ];
    }
}
