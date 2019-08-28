
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vehicl System</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/arabic-fonts/style.css') }}">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/selects/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.min.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/sunnah.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.min.css') }}">
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css') }}-->
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/mystyle.css') }}">
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <!--<div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo" alt="stack admin logo" src="{ { asset('app-assets/images/logo/stack-logo-light.png') }}">
                        <h4 class="brand-text">Vehicl System</h4>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>-->
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <!--<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Stack...">
                        </div>
                    </li>-->
                </ul>
                <ul class="nav navbar-nav float-right">
                    @auth
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="{{ asset('app-assets/images/portrait/small/avatar-s-1.png') }}" alt="avatar"><i></i></span>
                            <span class="user-name">{{ Auth::User()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!--<a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                            <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                            <a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a>
                            <a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div>-->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="ft-power"></i>
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </li>
                        @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content ml-0">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer footer-static footer-light navbar-border ml-0">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">جميع الحقوق محفوظة &copy; 2019 <a class="text-bold-800 grey darken-2" href="#"
                                                                                              target="_blank"></a> </span>
        <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">تطوير </span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/extensions/jquery.knob.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/extensions/knob.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/data/jvector/visitor-data.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/charts/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/unslider-min.js') }}" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-climacon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.min.css') }}">
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script type="text/javascript">

    $(document).ready(function () {
        $('.select2').select2({
            ajax: {
                url: 'http://localhost/vehicle/public/getTargetVehicle',
                data: function (params) {
                    return {
                        search: params.term,
                        page: params.page || 1
                    };
                },
                dataType: 'json',
                processResults: function (data) {
                    console.log(data);
                    data.data.page = data.data.page || 1;
                    return {
                        results: data.data.items.map(function (item) {
                            return {
                                id: item.file,
                                text: item.file + ' [ ' + dateReformatting(item.purchase_date) + ' ]'
                            };
                        }),
                        pagination: {
                            more: data.data.pagination
                        }
                    }
                },
                cache: true,
                delay: 250
            },
            placeholder: 'اسم المشرف  / رقم المشرف',
                //                minimumInputLength: 2,
            //multiple: true
        }); // end select2


        $("#km,#purchase_price,#selling_price, #form-addBill #labor").change(function () {
            console.log(format1(this.value));
            this.value=format1(this.value);
        });

        getData();
            $("#form-addUser").submit(function (e) {
                e.preventDefault();
                reformater();
                var data = {};
                $.each($("#form-addUser").serializeArray(), function (index, obj) {
                    data[obj.name] = obj.value;
                });
                axios({
                    method: 'POST',
                    url: '{{ route('vehicleStore') }}',
                    responseType: 'json',
                    data: data
                }).then(function (response) {
                    $("#form-addUser")[0].reset();
                    $("#addUser").modal('hide');
                    toastr.success(response.data.message, '@if(Auth::check()) {{ Auth::User()->name }} @endif');
                    getData();
                }).catch(function (error) {
                    console.log(error);
                    setError("form-addUser", error.response.data.errors);
                });
            });// end submit form

        $("#form-editUser").submit(function (e) {
            e.preventDefault();
            String.prototype.replaceAll = function(search, replacement) {
                var target = this;
                return target.replace(new RegExp(search, 'g'), replacement);
            };
            $("#form-editUser #km").val($("#form-editUser #km").val().replaceAll(",",""));
            $("#form-editUser #purchase_price").val($("#form-editUser #purchase_price").val().replaceAll(",",""));
            reformater();
            var data = {};
            $.each($("#form-editUser").serializeArray(), function (index, obj) {
                data[obj.name] = obj.value;
            });
            axios({
                method: 'PUT',
                url: '{{ route('vehicleUpdate') }}'+'/'+data.id,
                responseType: 'json',
                data: data
            }).then(function (response) {
                $("#form-editUser")[0].reset();
                $("#editUser").modal('hide');
                toastr.success(response.data.message, '@if(Auth::check()) {{ Auth::User()->name }} @endif');
                getData();
            }).catch(function (error) {
                console.log(error);
                setError("form-editUser", error.response.data.errors);
            });
        });// end submit form

        $("#form-addBill").submit(function (e) {
            e.preventDefault();
            reformater();
            var data = {};
            $.each($("#form-addBill").serializeArray(), function (index, obj) {
                data[obj.name] = obj.value;
            });
            axios({
                method: 'POST',
                url: '{{ route('stepStore') }}',
                responseType: 'json',
                data: data
            }).then(function (response) {
                $("#form-addBill")[0].reset();
                $("#addBill #description_col").addClass('hidden');
                toastr.success(response.data.message, '@if(Auth::check()) {{ Auth::User()->name }} @endif');
                getBills(data.vehicle_id);
            }).catch(function (error) {
                console.log(error);
                setError("form-addBill", error.response.data.errors);
            });
        });// end submit form


        $("#form-sellBox").submit(function (e) {
            e.preventDefault();
            reformater();
            var data = {};
            $.each($("#form-sellBox").serializeArray(), function (index, obj) {
                data[obj.name] = obj.value;
            });
            axios({
                method: 'PUT',
                url: '{{ route('vehicleSelling') }}'+'/'+data.id,
                responseType: 'json',
                data: data
            }).then(function (response) {
                $("#form-sellBox")[0].reset();
                $("#sellBox").modal('hide');
                toastr.success(response.data.message, '@if(Auth::check()) {{ Auth::User()->name }} @endif');
                getData();
            }).catch(function (error) {
                console.log(error);
                setError("form-sellBox", error.response.data.errors);
            });
        });// end submit form

        $("#opt").change(function (e) {
            if(e.currentTarget.value=='Parts' || e.currentTarget.value=='Others')
                $("#description_col").removeClass('hidden');
            else
                $("#description_col").addClass('hidden');
        });
    });

    function reFormaterTable() {
        $.each($(".format1"), function (index, item) {
            $(item).text('$ '+format1(item.innerText.replace("$","")));
            //console.log(t);
        });
    }
    function reformater() {
        String.prototype.replaceAll = function(search, replacement) {
            var target = this;
            return target.replace(new RegExp(search, 'g'), replacement);
        };
        $("#km").val($("#km").val().replaceAll(",",""));
        $("#purchase_price").val($("#purchase_price").val().replaceAll(",",""));
        $("#form-addBill #labor").val($("#form-addBill #labor").val().replaceAll(",",""));
        $("#selling_price").val($("#selling_price").val().replaceAll(",",""));
    }
    function format1(n) {
        var t=n.replace(",","");
        return  t.replace(/./g, function(c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
        });
    }
    function getData() {
        axios({
            method: 'GET',
            url: '{{ route('vehicle') }}',
            responseType: 'json',
        }).then(function (response) {
            $("#vehicles_tb tbody tr").remove();
            if(response.data.data.length>0) {
                var i=response.data.data.length;
                $.each(response.data.data, function (index, item) {
                    $("#vehicles_tb tbody").append('<tr>\n' +
                        '                                <th scope="row">'+ (index+1) +'</th>\n' +
                        '                                <td>' + item.file + '</td>\n' +
                        '                                <td>' + item.model + '</td>\n' +
                        '                                <td>' + item.color +'</td>\n' +
                        '                                <td class="format1"> ' +'$'+ item.purchase_price.toFixed(2) +' </td>\n' +
                        '                                <td class="format1"> ' +'$'+ item.selling_price.toFixed(2) +' </td>\n' +
                        '                                <td class="format1"> ' +'$'+ item.cost.toFixed(2) +' </td>\n' +
                        '                                <td>\n' +
                        '                                    <button type="button" data-id="'+ item.id +'" class="btn btn-float btn-outline-secondary btn-round" onclick="editUser(this)"><i class="fa fa-edit"></i></button>\n' +
                        '                                    <button type="button" data-id="'+ item.id +'" class="btn btn-float btn-outline-success btn-round" onclick="addBill(this)"><i class="fa fa-plus"></i></button>\n' +
                        '                                    <button type="button" data-id="'+ item.id +'" class="btn btn-float btn-outline-danger btn-round" onclick="deleteVehicle(this)"><i class="fa fa-trash"></i></button>\n' +
                        '                                    <a type="button" data-id="'+ item.id +'" class="btn btn-float btn-outline-secondary btn-round" target="_blank" href="'+"http://qmails.one/vehicle/public/vehicleReport2/"+item.id +'"><i class="fa fa-print"></i></a>\n' +
                        '                                    <button type="button" data-id="'+ item.id +'" class="btn btn-float btn-outline-secondary btn-round" onclick="viewInvoce(this)"><i class="fa fa-eye"></i></button>\n' +
                        '                                </td>\n' +
                        '                                <td>\n' +
                        '                                    <button type="button" data-id="'+ item.id +'" class="btn btn-primary" onclick="selling(this)">Sell Now</button>\n' +
                        '                                </td>\n' +
                        '                            </tr>');
                });
                reFormaterTable();
            }
        }).catch(function (error) {
            //setError("form-addUser", error.response.data.errors);
            swal('Error !', error.response.data.errors, 'error');
        });

    }
    function editUser(params) {
        axios({
            method: 'GET',
            url: '{{ route('vehicleShow') }}'+'/'+$(params).data('id'),
            responseType: 'json',
        }).then(function (response) {
            $("#form-editUser #id").val(response.data.data.id);
            $("#form-editUser #file").val(response.data.data.file);
            $("#form-editUser #model").val(response.data.data.model);
            $("#form-editUser #make").val(response.data.data.make);
            $("#form-editUser #color").val(response.data.data.color);
            $("#form-editUser #purchase_date").val(dateReformatting(response.data.data.purchase_date));
            $("#form-editUser #year").val(response.data.data.year);
            $("#form-editUser #trim").val(response.data.data.trim);
            $("#form-editUser #vin").val(response.data.data.vin);
            $("#form-editUser #km").val(response.data.data.km).trigger('change');
            $("#form-editUser #purchase_price").val(response.data.data.purchase_price).trigger('change');
            //$("#form-editUser #selling_price").val(response.data.data.selling_price).trigger('change');
            $("#form-editUser #tax").val(response.data.data.tax);
            $("#form-editUser #gross_profit").val(response.data.data.tax);
            $("#form-editUser #pay_by").val(response.data.data.pay_by);
            $("#form-editUser #note").val(response.data.data.note);
            $("#editUser").modal('show');
        }).catch(function (error) {
            //console.log(error);
            swal('Error !', error.response.data.errors, 'error');
        });
    }

    function AddNewVehicle() {
        $("#form-addUser")[0].reset();
        removeValidDiv();
        $("#addUser").modal('show');
    }

    function addBill(params) {
        var row=params;
        var cells=$(row).parent().parent().children();
        $("#addBill #myModalLabel33").text("Bill For Vehicle : "+cells[1].innerText);
        $("#form-addBill #vehicle_id").val($(params).data('id'));
        $("#invo_tb tbody tr").remove();
        $("#addBill").modal('show');
        getBills($(params).data('id'));

    }

    function getBills(id) {
        axios({
            method: 'GET',
            url: '{{ route('step') }}'+'/'+id,
            responseType: 'json',
        }).then(function (response) {
            $("#invo_tb tbody tr").remove();
            if(response.data.data.length>0) {
                var i=response.data.data.length;
                $.each(response.data.data, function (index, item) {
                    $("#invo_tb tbody").append('<tr>\n' +
                        '                                                <th scope="row">'+ (index+1) +'</th>\n' +
                        '                                                <td>'+ item.title +'</td>\n' +
                        '                                                <td class="format1">'+ item.labor.toFixed(2) +'</td>\n' +
                        '                                                <!--<td>'+'$'+ item.tax.toFixed(2) +'</td>-->\n' +
                        '                                                <td>'+ item.pay_by +'</td>\n' +
                        '                                                <td>\n' +
                        '                                                    <button type="button" data-id="'+ item.id +'" class="btn btn-outline-danger btn-round" onclick="deleteBill(this)"><i class="fa fa-trash"></i></button>\n' +
                        '                                                </td>\n' +
                        '                                            </tr>');
                });
                reFormaterTable();
            }
        }).catch(function (error) {
            //setError("form-addUser", error.response.data.errors);
            swal('Error !', error.response.data.errors, 'error');
        });
    }

    function deleteBill(params) {
        swal({
            title: "Are you sure you want to delete?",
            text: "Can not restore after deletion",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: false,
                    visible: true,
                    className: "",
                    closeModal: true,
                },
                confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: true,
                }
            }
            //closeModal:false,
            //closeOnCancel: false
        }).then(
        function(isConfirm){
            if (isConfirm) {
                axios({
                    method:'DELETE',
                    url:'{{ route("stepDestroy") }}'+'/'+$(params).data('id'),
                    responseType:'json',
                }).then(function (response) {
                    toastr.success(response.data.message, '@if(Auth::check()) {{ Auth::User()->name }} @endif');
                    $(params).parent().parent().remove();
                    //console.log($(params).parent().parent());
                }).catch(function (error) {
                    swal("خطأ !", error.response.data.errors, "error");
                });         // submitting the form when user press yes
            } else {
                //swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
    }

    function deleteVehicle(params) {
        swal({
            title: "Are you sure you want to delete?",
            text: "Can not restore after deletion",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: false,
                    visible: true,
                    className: "",
                    closeModal: true,
                },
                confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: true,
                }
            }
        }).then(
            function(isConfirm){
                if (isConfirm) {
                    axios({
                        method:'DELETE',
                        url:'{{ route("vehicleDestroy") }}'+'/'+$(params).data('id'),
                        responseType:'json',
                    }).then(function (response) {
                        toastr.success(response.data.message, '@if(Auth::check()) {{ Auth::User()->name }} @endif');
                        $(params).parent().parent().remove();
                        //console.log($(params).parent().parent());
                    }).catch(function (error) {
                        swal("خطأ !", error.response.data.errors, "error");
                    });         // submitting the form when user press yes
                } else {
                    //swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }

    function viewInvoce(params) {
        axios({
            method: 'GET',
            url: '{{ route('vehicleReport') }}'+'/'+$(params).data('id'),
            responseType: 'json',
        }).then(function (response) {
            console.log(response);
            $("#form-viewInvoce #report").attr('href','{{ route("vehicleReport2") }}'+'/'+$(params).data('id'));
            $("#form-viewInvoce #file").text(response.data.data.file);
            $("#form-viewInvoce #purchase_date").text(dateReformatting(response.data.data.purchase_date));
            $("#form-viewInvoce #model").text(response.data.data.model);
            $("#form-viewInvoce #make").text(response.data.data.make);
            $("#form-viewInvoce #year").text(response.data.data.year);
            $("#form-viewInvoce #trim").text(response.data.data.trim);
            $("#form-viewInvoce #vin").text(response.data.data.vin);
            $("#form-viewInvoce #km").text(response.data.data.km);
            $("#form-viewInvoce #color").text(response.data.data.color);
            $("#form-viewInvoce #purchase_price").text('$'+response.data.data.purchase_price);
            $("#form-viewInvoce #cost").text('$'+response.data.data.cost.toFixed(2));
            $("#form-viewInvoce #cost_with_tax").text('$'+response.data.data.cost_with_tax.toFixed(2));
            $("#form-viewInvoce #selling_price").text('$'+response.data.data.selling_price);
            $("#form-viewInvoce #gross_profit").text('$'+response.data.data.gross_profit_with_tax.toFixed(2));
            $("#form-viewInvoce #note").text(response.data.data.note);

            $("#option_tb tbody tr").remove();
            $("#option_tb tbody").append('<tr>\n' +
                '                                                <th scope="row">1</th>\n' +
                '                                                <td>Purchase Price</td>\n' +
                '                                                <td>'+'$'+ response.data.data.purchase_price +'</td>\n' +
                '                                                <td>'+'$'+ response.data.data.purchase_price_with_tax.toFixed(2)+'</td>\n' +
                '                                                <td>'+ response.data.data.pay_by +'</td>\n' +
                '                                            </tr>');

            $.each(response.data.data.steps, function (index, step) {
                $("#option_tb tbody").append('<tr>\n' +
                    '                                                <th scope="row">'+ (index+2) +'</th>\n' +
                    '                                                <td>'+ step.title +'</td>\n' +
                    '                                                <td>'+'$'+step.labor.toFixed(2) +'</td>\n' +
                    '                                                <!--<td>'+'%'+step.tax.toFixed(2) +'</td>-->\n' +
                    '                                                <td>'+'$'+step.labor_with_tax.toFixed(2) +'</td>\n' +
                    '                                                <td>'+ step.pay_by +'</td>\n' +
                    '                                            </tr>');


            });
            $("#form-viewInvoce #total_labor").text('$'+(response.data.data.cost.toFixed(2)));
            $("#form-viewInvoce #total_labor_with_tax").text('$'+(response.data.data.cost_with_tax).toFixed(2));

            $("#profits_tb tbody tr").remove();
            $.each(response.data.data.profit_share, function (index, profit) {
                $("#profits_tb tbody").append('<tr>\n' +
                    '                                                <th scope="row">'+ (index+1) +'</th>\n' +
                    '                                                <td>'+ profit.pay_by +'</td>\n' +
                    '                                                <td>'+'$'+profit.total_payment.toFixed(2)+'</td>\n' +
                    '                                                <!--<td>'+'$'+profit.total_payment_with_tax.toFixed(2)+'</td>-->\n' +
                    '                                                <!--<td>'+'%'+profit.rate_of_costs.toFixed(2)+'</td>-->\n' +
                    '                                                <td>'+'$'+ profit.profit.toFixed(2) +'</td>\n' +
                    '                                            </tr>');
            });
            $("#viewInvoce").modal('show');
        }).catch(function (error) {
            //console.log(error);
            swal('Error !', error.response.data.errors, 'error');
        });
    }

    function selling(params) {
        $("#form-sellBox #id").val($(params).data('id'));
        $("#sellBox").modal('show');

    }

    function setError(parentid, errors){
        console.log("setError");
        $.each(errors, function(index, item){
            console.log("setError each :" +index +" :" +item);
            $("#"+ parentid+" #"+index).after("<div class='help-block danger'><ul role='alert'><li style='list-style-type: circle;'>"+item+"</li></ul></div>");
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

    function removeValidDiv() {
        $(".help-block .danger").remove();
    }

</script>

</body>
</html>
