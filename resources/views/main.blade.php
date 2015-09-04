<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN PLUGIN CSS -->
    <link href="{{ asset('plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ asset('plugins/bootstrap-tag/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/jquery-slider/css/jquery.sidr.light.css') }}" rel="stylesheet" type="text/css"
          media="screen"/>
    <!-- END PLUGIN CSS -->

    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{ asset('plugins/boostrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/boostrapv3/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END CORE CSS FRAMEWORK -->

    <!-- BEGIN CSS TEMPLATE -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/custom-icon-set.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END CSS TEMPLATE -->

    <link href="{{ asset('plugins/boostrap-slider/css/slider.css') }}" rel="stylesheet" type="text/css"/>

    @yield('head')

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">

<!-- BEGIN HEADER -->
@include('nav-bar')
        <!-- END HEADER -->

<!-- BEGIN CONTAINER -->
<div class="page-container row">
    <!-- BEGIN SIDEBAR -->
        @include('side-bar')
    <!-- END SIDEBAR -->


    <!-- BEGIN PAGE CONTAINER-->
    <div class="page-content">
        @yield('content')
    </div>
</div>

<!-- BEGIN CHAT -->
    @include('chat')
<!-- END CHAT -->



<!-- BEGIN CORE JS FRAMEWORK-->
<script src="{{ asset('plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/breakpoints.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>

<!-- END CORE JS FRAMEWORK -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-slider/jquery.sidr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-numberAnimate/jquery.animateNumbers.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-block-ui/jqueryblockui.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-autonumeric/autoNumeric.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-tag/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/dropzone/dropzone.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-file-input/bootstrap.file-input.js') }}" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('js/core.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/chat.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/demo.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->

@yield('footer')
</body>
</html>