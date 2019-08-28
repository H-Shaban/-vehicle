<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Http\Requests\VehicleSellingRequest;
use App\Http\Resources\VehicleReportListOfAllCarsResource;
use App\Http\Resources\VehicleReportResource;
use App\Http\Resources\VehicleResource;
use App\Vehicle;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->sendResponse(VehicleResource::collection(Vehicle::orderBy('id', 'desc')->get()), 'success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VehicleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        $request->validated();
        $vehicle= new Vehicle();
        $vehicle->file=$request->file;
        $vehicle->purchase_date=$request->purchase_date;
        $vehicle->year=$request->year;
        $vehicle->make=$request->make;
        $vehicle->model=$request->model;
        $vehicle->trim=$request->trim;
        $vehicle->color=$request->color;
        $vehicle->vin=$request->vin;
        $vehicle->km=$request->km;
        $vehicle->purchase_price=$request->purchase_price;
        $vehicle->tax=$request->tax;
        $vehicle->note=$request->note;
        $vehicle->pay_by=$request->pay_by;
        $vehicle->inserted_by=Auth::User()->id;
        $vehicle->save();
        //$vehicle= Vehicle::create($request->all());
        return $this->sendResponse($vehicle,'Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);
            return $this->sendResponse(new VehicleResource($vehicle));

        } catch (ModelNotFoundException $e) {
            return $this->sendError( '', 'This item does not exist');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VehicleRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleRequest $request, $id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);
            $request->validated();
            $vehicle->file=$request->file;
            $vehicle->purchase_date=$request->purchase_date;
            $vehicle->year=$request->year;
            $vehicle->make=$request->make;
            $vehicle->model=$request->model;
            $vehicle->trim=$request->trim;
            $vehicle->color=$request->color;
            $vehicle->vin=$request->vin;
            $vehicle->km=$request->km;
            $vehicle->purchase_price=$request->purchase_price;
            $vehicle->tax=$request->tax;
            $vehicle->tax=$request->tax;
            $vehicle->note=$request->note;
            $vehicle->pay_by=$request->pay_by;
            $vehicle->inserted_by=Auth::User()->id;
            $vehicle->save();
            //$vehicle->update($request->all());
            return $this->sendResponse("","The edit was successful");

        } catch (ModelNotFoundException $e) {
            return $this->sendError(  '','This item does not exist');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);
            $result = Vehicle::destroy($vehicle->id);
            return $this->sendResponse($result, 'Successfully deleted');

        } catch (ModelNotFoundException $e) {
            return $this->sendError(  '','This item does not exist');
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function report($id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);
            return $this->sendResponse(new VehicleReportResource($vehicle));

        } catch (ModelNotFoundException $e) {
            return $this->sendError( '', 'This item does not exist');
        }
    }

    public function report2($id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);
            $vehicle=new VehicleReportResource($vehicle);
            return view('report')->with(compact('vehicle'));

        } catch (ModelNotFoundException $e) {
            return $this->sendError( '', 'This item does not exist');
        }
    }

    /**
     * @param VehicleSellingRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function sell(VehicleSellingRequest $request, $id)
    {
        try {
            $vehicle = Vehicle::findOrFail($id);
            $request->validated();
            $vehicle->selling_price=$request->selling_price;
            $vehicle->save();
            return $this->sendResponse("","The Selling was successful");

        } catch (ModelNotFoundException $e) {
            return $this->sendError(  '','This item does not exist');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function getTargetVehicle(Request $request){
        $searchString = $request->get('search');
        if (!empty($searchString))
            $data= Vehicle::whereLike('file',str_replace(' ','%',$searchString));
        else
            $data= Vehicle::take(10)->get();


        $data=  $data->paginate(5,'file');
        return $this->sendResponse(['items' => $data->toArray(), 'pagination' => $data->nextPageUrl() ? true : false]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function reportListOfCars($type)
    {
        if ($type=='all') {
            $vehicles = Vehicle::with('steps')->orderBy('id', 'desc')->get();
            $title="List Of All Cars";
        }
        elseif ($type=='sold') {
            $vehicles = Vehicle::with('steps')->where('selling_price', '>', 0)->orderBy('id', 'desc')->get();
            $title="List Of All Sold Cars";
        }
        elseif ($type=='notsold') {
            $vehicles = Vehicle::with('steps')->where('selling_price', '=', 0)->orderBy('id', 'desc')->get();
            $title="List Of All Unsold Cars";
        }
        else {
            $vehicles = Vehicle::with('steps')->orderBy('id', 'desc')->get();
            $title="List Of All Data";
        }
        //$vehicles=VehicleReportListOfAllCarsResource::collection($vehicles);
        return view('reports_generator')
            ->with(compact('vehicles'))
            ->with(compact('title'));
    }
}
