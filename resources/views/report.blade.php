<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vehicle Invoice System</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        @media print{
            table{
                /*text-align:center;*/
                width:100%;
                border-spacing: 3px;
                border-collapse: separate;
                font-size:16px;
            }
            .left{
                text-align:left;
            }
            th {
                width:1cm;
                background-color:#5c5c5c; !important;
                color:#fff;
                padding-left:10px;
                padding-right:10px;
                font-size:16px;
            }
            .grayBack {
                background-color:#e3e3e3; !important;
                color:#000;
                padding-left:10px;
                padding-right:10px;
                font-size:18px;
            }
            .extraBold{
                font-weight: 1000;
                /*text-decoration: underline;*/

            }


        }

    </style>
</head>
<body>
<div class="container"  style="width:20cm;height:27cm;border:solid" >
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
                <table id="option_tb" class="table table-sm mb-2">
                    <thead style="background-color: #ccc">
                    <tr>
                        <th style="width: 10px;">#</th>
                        <th>option</th>
                        <th>Labor</th>
                        <!--<th>Tax.</th>-->
                        <th>Labor <small><em> with tax.</em></small></th>
                        <th>Paid</th>
                    </tr>
                    </thead>
                    <tbody>
                     <tr>
                        <th scope="row"></th>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <th>Total</th>
                        <th id="total_labor">$14255</th>
                        <th id="total_labor_with_tax">$16108.15</th>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
        <hr>
<div class="row">
        <div class="col-sm-12 mb-2">
            <div class="table-responsive">
                <table id="profits_tb" class="table table-sm mb-0 " >
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
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <!--<td>$undefined</td>-->
                        <!--<td>%undefined</td>-->
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <p id="note" style="padding: 2px; border: #c5c6c8 solid 1px;"></p>
        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('app-assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
                var url = new URL(window.location.href);
                var student_no=window.location.href.substring(url.href.lastIndexOf('/')+1);
        setTimeout(viewInvoce(student_no),5000);
        //window.print();
        //window.close();

        });

        function viewInvoce(params) {
            axios({
                method: 'GET',
                url: '{{ route('vehicleReport') }}'+'/'+params,
            responseType: 'json',
        }).then(function (response) {
            console.log(response);
            //$("#form-viewInvoce #report").attr('href','http://localhost/vehicle/public/vehicleReport2/'+$(params).data('id'));
            $("#file").text(response.data.data.file);
            $("#purchase_date").text(dateReformatting(response.data.data.purchase_date));
            $("#model").text(response.data.data.model);
            $("#make").text(response.data.data.make);
            $("#year").text(response.data.data.year);
            $("#trim").text(response.data.data.trim);
            $("#vin").text(response.data.data.vin);
            $("#km").text(response.data.data.km);
            $("#color").text(response.data.data.color);
            $("#purchase_price").text('$'+response.data.data.purchase_price);
            $("#cost").text('$'+response.data.data.cost);
            $("#cost_with_tax").text('$'+response.data.data.cost_with_tax);
            $("#selling_price").text('$'+response.data.data.selling_price);
            $("#note").text(response.data.data.note);
            $("#gross_profit").text('$'+response.data.data.gross_profit_with_tax.toFixed(2));

            $("#option_tb tbody tr").remove();
            $("#option_tb tbody").append('<tr>\n' +
                '                                                <th scope="row">1</th>\n' +
                '                                                <td>Purchase Price</td>\n' +
                '                                                <td>'+'$'+ response.data.data.purchase_price +'</td>\n' +
                '                                                <td>'+'$'+ response.data.data.purchase_price_with_tax+'</td>\n' +
                '                                                <td>'+ response.data.data.pay_by +'</td>\n' +
                '                                            </tr>');

            $.each(response.data.data.steps, function (index, step) {
                $("#option_tb tbody").append('<tr>\n' +
                    '                                                <th scope="row">'+ (index+2) +'</th>\n' +
                    '                                                <td>'+ step.title +'</td>\n' +
                    '                                                <td>'+'$'+step.labor +'</td>\n' +
                    '                                                <!--<td>'+'%'+step.tax +'</td>-->\n' +
                    '                                                <td>'+'$'+step.labor_with_tax +'</td>\n' +
                    '                                                <td>'+ step.pay_by +'</td>\n' +
                    '                                            </tr>');


            });
            $("#form-viewInvoce #total_labor").text('$'+(response.data.data.cost));
            $("#form-viewInvoce #total_labor_with_tax").text('$'+(response.data.data.cost_with_tax).toFixed(2));

            $("#profits_tb tbody tr").remove();
            $.each(response.data.data.profit_share, function (index, profit) {
                $("#profits_tb tbody").append('<tr>\n' +
                    '                                                <th scope="row">'+ (index+1) +'</th>\n' +
                    '                                                <td>'+ profit.pay_by +'</td>\n' +
                    '                                                <td>'+'$'+profit.total_payment+'</td>\n' +
                    '                                                <!--<td>'+'$'+profit.total_payment_with_tax+'</td>-->\n' +
                    '                                                <!--<td>'+'%'+profit.rate_of_costs+'</td>-->\n' +
                    '                                                <td>'+'$'+ profit.profit.toFixed(2) +'</td>\n' +
                    '                                            </tr>');
            });

        }).catch(function (error) {
            console.log(error);
            //swal('Error !', error.response.data.errors, 'error');
        });
    }

    function dateReformatting(date) {
        if (date == null)
            return 0;
        var mydate = date.split(" ");
        var newDate = mydate.pop();
        newDate = mydate.pop();
        return newDate;
    }
</script>
</body>
</html>
