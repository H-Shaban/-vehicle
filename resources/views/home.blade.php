@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Welcome to Vehicle System :) </h4>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control select2">
                                        <option>.... Search</option>
                                        <option>	MTA2873	</option>
                                        <option>	SNA3705	</option>
                                        <option>	CZA2871	</option>
                                        <option>	FFA7162	</option>
                                        <option>	CZA2889	</option>
                                        <option>	DOA8514	</option>
                                        <option>	SLA4952	</option>
                                        <option>	FFA7437	</option>
                                        <option>	MEA0192	</option>
                                        <option>	CZA2906	</option>
                                        <option>	BKA1637	</option>
                                        <option>	MTA2382	</option>
                                        <option>	MTA3055	</option>
                                        <option>	Traderev	</option>
                                        <option>	BAA3435	</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <!-- Floating Outline button with text -->
                                    <button type="button" class="btn btn-icon btn-outline-primary" onclick="AddNewVehicle()"><i class="fa fa-plus"></i>
                                        Add New vehicle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="vehicles_tb" class="table table-xl mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>File</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Purchase Price</th>
                                <th>Selling Price</th>
                                <th>Cost</th>
                                <th>Option</th>
                                <th>selling</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>MTA2873</td>
                                <td>Elantra</td>
                                <td>blue</td>
                                <td> $1,799.06 </td>
                                <td> $5,567.34 </td>
                                <td>
                                    <button type="button" data-id="1" class="btn btn-float btn-outline-secondary btn-round" onclick="editUser(this)"><i class="fa fa-edit"></i></button>
                                    <button type="button" data-id="1" class="btn btn-float btn-outline-success btn-round" onclick="addBill(this)"><i class="fa fa-plus"></i></button>
                                    <button type="button" data-id="1" class="btn btn-float btn-outline-danger btn-round" onclick="getzip(this)"><i class="fa fa-trash"></i></button>
                                    <button type="button" data-id="1" class="btn btn-float btn-outline-secondary btn-round" onclick="getzip(this)"><i class="fa fa-print"></i></button>
                                    <button type="button" data-id="1" class="btn btn-float btn-outline-secondary btn-round" onclick="viewInvoce(this)"><i class="fa fa-eye"></i></button>
                                </td>
                                <td>
                                    <button type="button" data-id="1" class="btn btn-float btn-outline-secondary btn-round" onclick="selling(this)"><i class="fa fa-sellsy"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>SNA3705</td>
                                <td>MAZDA3</td>
                                <td>black</td>
                                <td> $3,352.00 </td>
                                <td> $7,697.00 </td>
                                <td>
                                    <button type="button" data-id="2" class="btn btn-float btn-outline-secondary btn-round" onclick="editUser(this)"><i class="fa fa-edit"></i></button>
                                    <button type="button" data-id="2" class="btn btn-float btn-outline-success btn-round" onclick="addBill(this)"><i class="fa fa-plus"></i></button>
                                    <button type="button" data-id="2" class="btn btn-float btn-outline-danger btn-round" onclick="getzip(this)"><i class="fa fa-trash"></i></button>
                                    <button type="button" data-id="2" class="btn btn-float btn-outline-secondary btn-round" onclick="getzip(this)"><i class="fa fa-print"></i></button>
                                    <button type="button" data-id="2" class="btn btn-float btn-outline-secondary btn-round" onclick="viewInvoce(this)"><i class="fa fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>CZA2871</td>
                                <td>Cruze</td>
                                <td>selvir</td>
                                <td> $1,452.00 </td>
                                <td> $1,452.00 </td>
                                <td>
                                    <button type="button" data-id="3" class="btn btn-float btn-outline-secondary btn-round" onclick="editUser(this)"><i class="fa fa-edit"></i></button>
                                    <button type="button" data-id="3" class="btn btn-float btn-outline-success btn-round" onclick="addBill(this)"><i class="fa fa-plus"></i></button>
                                    <button type="button" data-id="3" class="btn btn-float btn-outline-danger btn-round" onclick="getzip(this)"><i class="fa fa-trash"></i></button>
                                    <button type="button" data-id="3" class="btn btn-float btn-outline-secondary btn-round" onclick="getzip(this)"><i class="fa fa-print"></i></button>
                                    <button type="button" data-id="3" class="btn btn-float btn-outline-secondary btn-round" onclick="viewInvoce(this)"><i class="fa fa-eye"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="buttons-group">
                <a class="btn btn-primary" target="_blank" href="{{ route('reportListOfCars', ['type' => 'all']) }}">List of all cars</a>
                <a class="btn btn-primary" target="_blank" href="{{ route('reportListOfCars', ['type' => 'sold']) }}">List of all sold cars</a>
                <a class="btn btn-primary" target="_blank" href="{{ route('reportListOfCars', ['type' => 'notsold']) }}">list of all not sold cars</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade text-left" id="sellBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Selling Box</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-sellBox" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="selling_price">Selling Price</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" id="selling_price" class="form-control" placeholder="0.0" name="selling_price" required>
                                            <input type="hidden" id="id" class="form-control" name="id">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="action" class="btn btn-primary btn-lg">Save</button>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="Close">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal -->
    <div class="modal fade text-left" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Add New vehicle data</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addUser" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="file">File</label>
                                        <input type="text" id="file" class="form-control" placeholder="File" name="file" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="purchase_date">Purchase Date</label>
                                        <input type="date" id="purchase_date" class="form-control" placeholder="Purchase Date" name="purchase_date" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <input type="number" id="year" class="form-control" placeholder="Year" name="year" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="make">Make</label>
                                        <input type="text" id="make" class="form-control" placeholder="Make" name="make" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <input type="text" id="model" class="form-control" placeholder="Model" name="model" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="trim">Trim</label>
                                        <input type="text" id="trim" class="form-control" placeholder="Trim" name="trim" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <input type="text" id="color" class="form-control" placeholder="Color" name="color" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="vin">VIN</label>
                                        <input type="text" id="vin" class="form-control" placeholder="VIN" name="vin" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="km">KM</label>
                                        <input type="text" id="km" class="form-control" placeholder="KM" name="km" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="purchase_price">Purchase Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" id="purchase_price" class="form-control" placeholder="Purchase Price" name="purchase_price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="tax">Tax.</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" id="tax" class="form-control" placeholder="Tax." name="tax" value="0.13" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="pay_by">Paid</label>
                                        <select class="form-control" name="pay_by" required>
                                            <option value="">-- By whom --</option>
                                            <option value="Samer">Samer</option>
                                            <option value="Walid">Walid</option>
                                            <option value="Samir">Samir</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <textarea id="note" class="form-control" name="note" placeholder="Note..." rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="action" class="btn btn-primary btn-lg">Add</button>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="Close">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal -->
    <div class="modal fade text-left" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Edit vehicle data</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-editUser" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="file">File</label>
                                        <input type="text" id="file" class="form-control" placeholder="File" name="file" required>
                                        <input type="hidden" id="id" class="form-control" name="id" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="purchase_date">Purchase Date</label>
                                        <input type="date" id="purchase_date" class="form-control" placeholder="Purchase Date" name="purchase_date" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <input type="number" id="year" class="form-control" placeholder="Year" name="year" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="make">Make</label>
                                        <input type="text" id="make" class="form-control" placeholder="Make" name="make" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <input type="text" id="model" class="form-control" placeholder="Model" name="model" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="trim">Trim</label>
                                        <input type="text" id="trim" class="form-control" placeholder="Trim" name="trim" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <input type="text" id="color" class="form-control" placeholder="Color" name="color" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="vin">VIN</label>
                                        <input type="text" id="vin" class="form-control" placeholder="VIN" name="vin" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="km">KM</label>
                                        <input type="text" id="km" class="form-control" placeholder="KM" name="km" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="purchase_price">Purchase Price</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" id="purchase_price" class="form-control" placeholder="Purchase Price" name="purchase_price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="tax">Tax.</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" id="tax" class="form-control" placeholder="Tax." name="tax" value="0.13" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="pay_by">Paid</label>
                                        <select id="pay_by" class="form-control" name="pay_by" required>
                                            <option value="">-- By whom --</option>
                                            <option value="Samer">Samer</option>
                                            <option value="Walid">Walid</option>
                                            <option value="Samir">Samir</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <textarea id="note" class="form-control" name="note" placeholder="Note..." rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="action" class="btn btn-primary btn-lg">Save</button>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="Close">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal -->
    <div class="modal fade text-left" id="addBill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Edit vehicle data</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-addBill" action="#">
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="title">Option</label>
                                        <select id="opt" class="form-control" name="title" required>
                                            <option value="">-- Select Option --</option>
                                            <option value="Body Shop Labor">Body Shop Labor</option>
                                            <option value="Mechanic Shop">Mechanic Shop</option>
                                            <option value="Parts">Parts</option>
                                            <option value="Towing">Towing</option>
                                            <option value="Detailing">Detailing</option>
                                            <option value="TradeRev/Adesa fees">TradeRev/Adesa fees</option>
                                            <option value="Carfax">Carfax</option>
                                            <option value="Comm">Comm</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <input type="hidden" id="vehicle_id" class="form-control" name="vehicle_id">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="labor">Labor</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" id="labor" class="form-control" placeholder="Labor" name="labor" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="tax">Tax.</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" id="tax" class="form-control" placeholder="Tax." name="tax" value="0.13" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="pay_by">Paid</label>
                                        <select class="form-control" name="pay_by" required>
                                            <option value="">-- By whom --</option>
                                            <option value="Samer">Samer</option>
                                            <option value="Walid">Walid</option>
                                            <option value="Samir">Samir</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="description_col" class="col-sm-12 hidden">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" id="description" class="form-control" placeholder="Description" name="description">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table id="invo_tb" class="table table-sm mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Option</th>
                                                <th>Labor</th>
                                                <!--<th>Tax.</th>-->
                                                <th>Paid</th>
                                                <th>Del.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Body Shop Labor</td>
                                                <td> $598.28 </td>
                                                <td>2%</td>
                                                <td>Samer</td>
                                                <td>
                                                    <button type="button" data-id="3" class="btn btn-outline-danger btn-round" onclick="deleteBill(this)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mechanic Shop Labor</td>
                                                <td> $1,600.00 </td>
                                                <td>2%</td>
                                                <td>Ahmed</td>
                                                <td>
                                                    <button type="button" data-id="3" class="btn btn-outline-danger btn-round" onclick="getzip(this)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Parts</td>
                                                <td> $1,670.00 </td>
                                                <td>2%</td>
                                                <td>Hamada</td>
                                                <td>
                                                    <button type="button" data-id="3" class="btn btn-outline-danger btn-round" onclick="getzip(this)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="action" class="btn btn-primary btn-lg">Add Bill..</button>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="Close">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal -->
    <div class="modal fade text-left" id="viewInvoce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Invoice Vehicle System</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-viewInvoce" action="#">
                    <div id="" class="modal-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>Invoice Vehicle System</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="px-0 list-unstyled">
                                        <li><span class="text-muted"><b>File :</b> </span> <span id="file"></span></li>
                                        <li><span class="text-muted"><b>Purchase Date :</b> </span> <span id="purchase_date"></span></li>
                                        <li><span class="text-muted"><b>Year :</b> </span> <span id="year"></span></li>
                                        <li><span class="text-muted"><b>Make :</b> </span> <span id="make"></span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="px-0 list-unstyled">
                                        <li><span class="text-muted"><b>Model :</b> </span> <span id="model"></span></li>
                                        <li><span class="text-muted"><b>Trim :</b> </span> <span id="trim"></span></li>
                                        <li><span class="text-muted"><b>Color :</b> </span> <span id="color"></span></li>
                                        <li><span class="text-muted"><b>VIN :</b> </span> <span id="vin"></span> <span class="text-muted"><b>KM :</b> <span id="km"></span></span> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="px-0 list-unstyled">
                                        <li><span class="text-muted"><b>Purchase Price :</b> </span> <span id="purchase_price"></span></li>
                                        <li><span class="text-muted"><b>Selling Price :</b> </span> <span id="selling_price"></span></li>
                                        <li><span class="text-muted"><b>Cost :</b> </span> <span id="cost"></span></li>
                                        <li><span class="text-muted"><b>Gross profit :</b> </span> <span id="gross_profit"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <!--<div class="col-sm-12 mb-2">
                                    <div class="table-responsive">
                                        <table class="table table-xl hidden">
                                            <thead style="background-color: #ccc">
                                            <tr>
                                                <th>File</th>
                                                <th>Purchase Date</th>
                                                <th>Year</th>
                                                <th>Make </th>
                                                <th>Model</th>
                                                <th>Trim</th>
                                                <th>Color</th>
                                                <th>VIN</th>
                                                <th>KM</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td >MTA2873</td>
                                                <td id="purchase_date">Elantra</td>
                                                <td id="year">blue</td>
                                                <td id="make">MTA2873</td>
                                                <td id="model">Elantra</td>
                                                <td id="trim">blue</td>
                                                <td id="color">MTA2873</td>
                                                <td id="vin">Elantra</td>
                                                <td id="km">blue</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Purchase Price</th>
                                                    <td id="purchase_price"> $1,799.06 </td>
                                                    <th>Selling Price</th>
                                                    <td id="selling_price"> $1,799.06 </td>
                                                    <th>Cost</th>
                                                    <td id="cost"> $5,567.34 </td>
                                                    <th>Gross profit</th>
                                                    <td colspan="2" id="gross_profit"> $6,567.34 </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>-->


                                <div class="col-sm-12 mb-2">
                                    <div class="table-responsive">
                                        <table id="option_tb" class="table table-sm mb-0">
                                            <thead style="background-color: #ccc">
                                            <tr>
                                                <th>#</th>
                                                <th>option</th>
                                                <th>Labor</th>
                                                <!--<th>Tax.</th>-->
                                                <th>Labor <small><em> with tax.</em></small></th>
                                                <th>Paid</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Purchase Price</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mechanic Shop Labor</td>
                                                <td> $1,600.00 </td>
                                                <td>2%</td>
                                                <td>Ahmed</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Parts</td>
                                                <td> $1,670.00 </td>
                                                <td>2%</td>
                                                <td>Hamada</td>

                                            </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <th>Total</th>
                                                    <th id="total_labor">$1,670.00</th>
                                                    <th id="total_labor_with_tax">$1,670.00</th>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-2">
                                    <div class="table-responsive">
                                        <table id="profits_tb" class="table table-sm mb-0">
                                            <thead style="background-color: #ccc">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Total payments</th>
                                                <!--<th>Total payments <small><em> with tax.</em></small></th>-->
                                                <!--<th>Rate of costs</th>-->
                                                <th>profit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Samer</td>
                                                <td>Samer</td>
                                                <td>Samer</td>
                                                <td> $598.28 </td>
                                            </tr>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td> $1,600.00 </td>
                                            </tr>
                                            <tr>
                                                <td>Hamada</td>
                                                <td> $1,670.00 </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p id="note" style="padding: 2px; border: #c5c6c8 solid 1px;">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a id="report" class="btn btn-primary btn-lg" target="_blank" href="">Print</a>
                        <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal"
                               value="Close">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

@endsection

