<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required|unique:vehicles,file,'.$this->id.',id,deleted_at,NULL',
            'purchase_date' => 'required',
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'trim' => 'required',
            'color' => 'required',
            'vin' => 'required',
            'km' => 'required',
            'purchase_price' => 'required',
            'tax' => 'required'
        ];
    }
}
