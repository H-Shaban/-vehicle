<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Step extends Model
{
    use SoftDeletes;
    protected $fillable = ['vehicle_id, title, labor, tax, description, pay_by, inserted_by'];

    protected $appends=['labor_with_tax', 'labor_tax_value'];
    public function Vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }

    public function getLaborWithTaxAttribute()
    {
        return ($this->attributes['labor']+($this->attributes['labor']*$this->attributes['tax']));
    }

    public function getLaborTaxValueAttribute()
    {
        return ($this->attributes['labor']*$this->attributes['tax']);
    }

}
