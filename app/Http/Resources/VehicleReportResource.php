<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*$cost_with_tax=0;
        foreach ($this->steps as $index => $step){
            if($step->tax>0)
            $cost_with_tax+=$step->labor+($step->labor*($step->tax/100));
            else
            $cost_with_tax+=$step->labor;
        }

        $purchase_price_with_tax=0;
        $purchase_price_with_tax = $this->tax > 0 ? ($this->purchase_price + ($this->purchase_price * ($this->tax / 100))) : $this->purchase_price;
*/
        $cost_with_tax_temp=0;
        foreach ($this->paid as $index =>$partner){
            /*foreach ($partner as $index2 => $p){
                if($p->tax>0)
                    $cost_with_tax_temp+=$p->labor+($p->labor*($p->tax/100));
                else
                    $cost_with_tax_temp+=$p->labor;
            }*/
            $total_payment=$index==$this->pay_by? ($partner->sum('labor_with_tax')+$this->purchase_price_with_tax):$partner->sum('labor_with_tax');
            $profit_share[]=[
                'pay_by'=>$index,
                'total_payment'=> $total_payment,
                'profit'=> (($this->selling_price-($this->steps->sum('labor_with_tax')+$this->purchase_price_with_tax))/3)//((($total_payment/($this->purchase_price_with_tax+$this->steps->sum('labor_with_tax'))*100)/100)*($this->selling_price-($this->steps->sum('labor_with_tax')+$this->purchase_price_with_tax))) ,
                //'rate_of_costs'=>(($cost_with_tax_temp*100)/$cost_with_tax),
            ];
        }
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
            'note'=>$this->note,
            'cost'=> ($this->purchase_price+$this->steps->sum('labor')),
            'cost_with_tax'=> ($this->purchase_price_with_tax+$this->steps->sum('labor_with_tax')),
            'gross_profit'=> ($this->selling_price-($this->steps->sum('labor')+$this->purchase_price)),
            'gross_profit_with_tax'=> ($this->selling_price-($this->steps->sum('labor_with_tax')+$this->purchase_price_with_tax)),
            'steps'=> $this->steps,
            'profit_share'=>$profit_share
            //$this->steps->groupBy('pay_by')//->sum('labor'),
            /*
            'cost_with_tax'=> $cost_with_tax,
            'gross_profit'=> ($this->selling_price-($this->steps->sum('labor')+$this->purchase_price)),
            'gross_profit_with_tax'=> ($this->selling_price-($cost_with_tax+$purchase_price_with_tax)),*/
        ];
    }
}
