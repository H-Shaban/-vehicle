<?php

namespace App\Http\Controllers;

use App\Http\Requests\StepRequest;
use App\Http\Resources\StepResource;
use App\Step;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StepController extends Controller
{
    /**
     * @param $vehicle_id
     * @return mixed
     */
    public function index($vehicle_id)
    {
        return $this->sendResponse(StepResource::collection(Step::orderBy('id', 'desc')->where('vehicle_id', $vehicle_id)->get()) );
    }

    /**
     * @param StepRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StepRequest $request)
    {
        $request->validated();
        $step= new Step();
        $step->vehicle_id=$request->vehicle_id;
        $step->title=$request->title;
        $step->labor=$request->labor;
        $step->tax=$request->tax;
        if (!empty($request->description)) {
            if($request->description)
                $step->description=$request->description;
        }

        $step->pay_by=$request->pay_by;
        $step->inserted_by=Auth::User()->id;
        $step->save();
        //$vehicle= Vehicle::create($request->all());
        return $this->sendResponse($step,'Successfully added');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $step = Step::findOrFail($id);
            $result = Step::destroy($step->id);
            return $this->sendResponse($result, 'Successfully deleted');

        } catch (ModelNotFoundException $e) {
            return $this->sendError(  '','This item does not exist');
        }
    }
}
