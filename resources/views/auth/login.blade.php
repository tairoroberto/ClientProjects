@extends('main2')

@section('content')
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
                <a class="btn btn-link" href="{{ url('/password/email') }}">Esqueceu a senha?</a>
            </form>
        </div>
    </div>
@endsection
