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

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=" no-top">
<div class="container">
    <div class="lockscreen-wrapper animated  flipInX">

        <div class="col-xs-12 col-md-offset-3 col-sm-6 col-md-6 col-lg-6">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Usuário ou senha inválidos.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="row ">

            <div class="col-md-8 col-md-offset-4 col-sm-6 col-sm-offset-4 col-xs-offset-2">
                <div class="profile-wrapper">
                    <img width="69" height="69" data-src-retina="{{ asset('img/logo.png') }}"
                         data-src="{{ asset('img/logo.png') }}" src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <form class="user-form" action="{{ url('/auth/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <h2 class="user">Login<span class="semi-bold"></span></h2>
                    <input type="text" placeholder="Usuário" name="email" id="email"><br><br>
                    <input type="password" placeholder="Senha" name="password" id="password">
                    <button type="submit" class="btn btn-primary "><i class="fa fa-unlock"></i></button><br><br><br>
                    <div class="checkbox check-default">
                        <input id="remember" name="remember" type="checkbox" value="1" checked="checked">
                        <label for="remember">Lembrar</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="push"></div>
</div>
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK-->
<script src="{{ asset('plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("img").unveil();
    });
</script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>