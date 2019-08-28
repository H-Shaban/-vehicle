<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleReportListOfAllCarsResource extends JsonResource
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
            'purchase_tax_value'=>$this->purchase_tax_value,
            'purchase_price_with_tax'=> $this->purchase_price_with_tax,
            'selling_price'=>$this->selling_price,
            'pay_by'=>$this->pay_by,
            'tax'=>$this->tax,
            //'cost'=> ($this->purchase_price+$this->steps->sum('labor')),
            'cost_with_tax'=> ($this->purchase_price_with_tax+$this->steps->sum('labor_with_tax')),
            //'gross_profit'=> ($this->selling_price-($this->steps->sum('labor')+$this->purchase_price)),
            'gross_profit_with_tax'=> ($this->selling_price-($this->steps->sum('labor_with_tax')+$this->purchase_price_with_tax)),
            //'steps'=> $this->steps,
            //'profit_share'=>$profit_share
            //$this->steps->groupBy('pay_by')//->sum('labor'),
            /*
            'cost_with_tax'=> $cost_with_tax,
            'gross_profit'=> ($this->selling_price-($this->steps->sum('labor')+$this->purchase_price)),
            'gross_profit_with_tax'=> ($this->selling_price-($cost_with_tax+$purchase_price_with_tax)),*/
        ];
    }
}
