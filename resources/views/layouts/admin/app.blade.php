<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{URL::asset('assets/backend/images/favicon.ico')}}" type="image/ico"/>

    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{URL::asset('assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{URL::asset('assets/backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- NProgress -->
    <link href="{{URL::asset('assets/backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- iCheck -->
    <link href="{{URL::asset('assets/backend/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{URL::asset('assets/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}"
          rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{URL::asset('assets/backend/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}"
          rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="{{URL::asset('assets/backend/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">

    <!-- Select2 -->
    <link href="{{URL::asset('assets/backend/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">

    <!-- Switchery -->
    <link href="{{URL::asset('assets/backend/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">

    <!-- starrr -->
    <link href="{{URL::asset('assets/backend/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{URL::asset('assets/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('assets/backend/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ route('admin.dashboard') }}" class="site_title"><i class="fa fa-paw"></i>
                        <span>ADMIN</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{URL::asset('assets/backend/images/img.jpg')}}" alt="..."
                             class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ auth()->user()->name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                @include('layouts.admin.menu')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
{{--                <div class="sidebar-footer hidden-small">--}}
{{--                    <a data-toggle="tooltip" data-placement="top" title="Settings">--}}
{{--                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
{{--                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                    <a data-toggle="tooltip" data-placement="top" title="Lock">--}}
{{--                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">--}}
{{--                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>--}}
{{--                    </a>--}}
{{--                </div>--}}
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        @include('layouts.admin.nav')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{URL::asset('assets/backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('assets/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('assets/backend/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{URL::asset('assets/backend/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{URL::asset('assets/backend/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{URL::asset('assets/backend/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{URL::asset('assets/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{URL::asset('assets/backend/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{URL::asset('assets/backend/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{URL::asset('assets/backend/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{URL::asset('assets/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{URL::asset('assets/backend/vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{URL::asset('assets/backend/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{URL::asset('assets/backend/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- Datatables -->
<script src="{{URL::asset('assets/backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{URL::asset('assets/backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{URL::asset('assets/backend/vendors/google-code-prettify/src/prettify.js')}}"></script>
<!-- jQuery Tags Input -->
<script src="{{URL::asset('assets/backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<!-- Switchery -->
<script src="{{URL::asset('assets/backend/vendors/switchery/dist/switchery.min.js')}}"></script>
<!-- Select2 -->
<script src="{{URL::asset('assets/backend/vendors/select2/dist/js/select2.full.min.js')}}"></script>
<!-- Parsley -->
<script src="{{URL::asset('assets/backend/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
<!-- Autosize -->
<script src="{{URL::asset('assets/backend/vendors/autosize/dist/autosize.min.js')}}"></script>
<!-- jQuery autocomplete -->
<script src="{{URL::asset('assets/backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
<!-- starrr -->
<script src="{{URL::asset('assets/backend/vendors/starrr/dist/starrr.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{URL::asset('assets/backend/build/js/custom.min.js')}}"></script>

</body>
</html>
