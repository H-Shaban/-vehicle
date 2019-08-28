<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;
    protected $fillable = ['file, purchase_date, year, make, model, trim, color, vin, km, tax, note, purchase_price, selling_price, pay_by, inserted_by'];

    protected $appends =['purchase_price_with_tax', 'purchase_tax_value', 'paid'];

    public function steps()
    {
        return $this->hasMany('App\Step');
    }

    public function getPurchasePriceWithTaxAttribute()
    {
        return ($this->attributes['purchase_price']+($this->attributes['purchase_price']*$this->attributes['tax']));
    }

    public function getPurchaseTaxValueAttribute()
    {
        return ($this->attributes['purchase_price']*$this->attributes['tax']);
    }

    public function getPaidAttribute()
    {
        return $this->steps->groupBy('pay_by');
    }
}
