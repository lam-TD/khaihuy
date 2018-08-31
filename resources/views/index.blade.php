<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Khải Huy Company</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{asset('public/css/app.css')}}">

        {{--style--}}
        <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon.png">
        <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>

        <!-- element ui vue -->
        <link rel="stylesheet" href="https://unpkg.com/element-ui@2.4.6/lib/theme-chalk/index.css">
        <!-- Bootstrap Core CSS -->
        <link href="public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="public/template/css/nprogress.css">
        <!-- morris CSS -->
        <link href="public/assets/plugins/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="public/template/css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="public/css/colors/blue-dark.css" id="theme" rel="stylesheet">

        {{--jquery file-uploader--}}
        <link href="public/assets/plugins/jquery-FileUploader/jquery.fileuploader.min.css" media="all" rel="stylesheet">
        <link href="public/assets/plugins/jquery-FileUploader/thumbnails/css/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">

        {{--custom css--}}
        <link rel="stylesheet" href="public/template/css/custom.css">
        <link rel="stylesheet" href="public/template/css/custom_table.css">
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <div id="app">
            <main-app></main-app>
        </div>

        {{--PLUG IN--}}

        {{--<script src="https://unpkg.com/element-ui/lib/index.js"></script>--}}
        <script src="public/assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="public/assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <script type="" src="public/js/app.js"></script>

        {{--js file-uploader--}}
        {{--<script src="public/assets/plugins/jquery-FileUploader/jquery.fileuploader.min.js" type="text/javascript"></script>--}}
        {{--<script src="public/assets/plugins/jquery-FileUploader/thumbnails/js/custom.js" type="text/javascript"></script>--}}
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="public/template/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="public/template/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="public/template/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="public/assets/plugins/sticky-kit-master/dist/sticky-kit.js"></script>
        <!--Custom JavaScript -->
        <script src="public/template/js/custom.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--sparkline JavaScript -->
        <script src="public/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--morris JavaScript -->
        <script src="public/assets/plugins/raphael/raphael-min.js"></script>
        {{--<script src="public/assets/plugins/morrisjs/morris.min.js"></script>--}}
        <!-- Chart JS -->
        <script src="public/template/js/dashboard1.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="public/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script src="public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="public/template/js/number_format.js"></script>
        <script src="public/template/js/custom_end.js"></script>
        <script>
            $(document).ready(function () {
                $(".fix-header .topbar").stick_in_parent({});
                $('#myTable').DataTable({
                  "scrollX": true,
                  "searching": false,
                  "ordering": false
                });
            })

        </script>
    </body>

</html>
