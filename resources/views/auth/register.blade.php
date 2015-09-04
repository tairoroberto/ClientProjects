@extends('main')

@section('footer')
    @parent
    <script type="text/javascript">
        $(document).ready(function () {
            $('input[type=file]').bootstrapFileInput();
        });

    </script>
@endsection

@section('content')
    <div class="clearfix"></div>
    <div class="content">
        <div class="page-title">
            <h3>Cadastro de - <span class="semi-bold">Usuários</span></h3>
        </div>
        <!-- START FORM -->
        <div class="row">
            <div class="col-md-24">
                <div class="grid simple">

                    <div class="grid-body no-border">
                        <form action="{{ url('/auth/register') }}" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Há algum problema com os dados inseridos.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="row column-seperation">
                                <div class="col-md-24">
                                    <br>
                                    <div class="row form-row">

                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                                        </div>

                                        <div class="col-md-12">
                                            <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}">
                                        </div>


                                        <div class="col-md-4">
                                            <input type="password" class="form-control" name="senha" placeholder="Senha">
                                        </div>

                                        <div class="col-md-4">
                                            <input type="password" class="form-control" name="senha_confirmation" placeholder="Confirmar senha">
                                        </div>
                                        <div class="col-md-4">
                                            <select name="tipo" id="type" class="form-control" required>
                                                @if(!is_null(old('tipo')))
                                                    @if(old('tipo') == 0)
                                                        <option value="0">Administrador</option>
                                                    @elseif(old('tipo') == 1)
                                                        <option value="1">Cliente</option>
                                                    @endif
                                                @endif
                                                <option value="">Tipo de Usuário</option>
                                                <option value="0">Administrador</option>
                                                <option value="1">Cliente</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="pull-left"></div>
                                <div class="pull-right col-md-12 col-xs-12">


                                    <div class="pull-left col-md-8 col-xs-2">
                                        <input name="imagem" id="imagem" type="file" accept="image/*"
                                               class="filestyle btn btn-primary btn-cons"
                                               title="Selecione a logomarca do cliente" value="{{Input::old('imagem')}}"/>
                                    </div>

                                    <div class="pull-right col-md-4 col-xs-12">
                                        <button class="btn btn-primary btn-cons" type="submit"
                                                onclick="verificaResponsavel();">Salvar
                                        </button>
                                        <button class="btn btn-danger btn-cons" type="reset">Cancelar</button>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>

                    {{-- Div de mensagem de carregamento--}}
                    <div id="Carregando" style="display: none;" class="jquery-waiting-base-container">Carregando...
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
