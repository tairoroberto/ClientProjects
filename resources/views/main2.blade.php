<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{ asset('plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>
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
    @yield('head')

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=" no-top">
<div class="container">
    <div class="lockscreen-wrapper animated  flipInX">
        @yield('content')


    </div>
    <div id="push"></div>
</div>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->
<script src="{{ asset('plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap-file-input/bootstrap.file-input.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("img").unveil();
    });
</script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>