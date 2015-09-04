<div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">
        <div class="user-info-wrapper">
            <div class="profile-wrapper">
                @if(Auth::check())
                    @if(Auth::user()->image != "")
                        <img src="{{ asset(Auth::user()->image) }}" alt=""
                             data-src="{{ asset(Auth::user()->image) }}"
                             data-src-retina="{{ asset(Auth::user()->image) }}" width="69"
                             height="69"/>
                    @else
                        <img src="{{ asset('img/profiles/avatar.jpg') }}" alt=""
                             data-src="{{ asset('img/profiles/avatar.jpg') }}"
                             data-src-retina="{{ asset('img/profiles/avatar2x.jpg') }}" width="69"
                             height="69"/>
                    @endif
                @endif
            </div>
            <div class="user-info">
                <div class="greeting">Bem-vindo</div>
                <?php $nome = explode(' ', Auth::user()->name)?>
                @if(count($nome) > 1)

                    <div class="username">{{ $nome[0] }}<br> <span class="semi-bold">{{ $nome[1] }}</span></div>
                @else
                    <div class="username">{{$nome[0]}}<span class="semi-bold"></span></div>
                @endif

                <div class="status">
                    Status
                    <a href="#">
                        <div class="status-icon green"></div>
                        Online
                    </a>
                </div>
            </div>
        </div>
        <br>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->

        <ul>
            <li class="start">
                <a href="#">
                    <i class="icon-custom-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                @if(Auth::check())
                    <ul class="sub-menu">
                        @if(Auth::user()->type == 0)

                            <li><a href="{{url('auth/register')}}"><i class="fa fa-user"></i> Cadastrar Clientes</a>
                            </li>
                            <li><a href="#"><i class="icon-custom-new"></i> Cadastrar Projetos </a></li>
                            <li><a href="#"><i class="icon-custom-thumb"></i> Cadastrar Etapas de Projeto </a></li>
                            <li><a href="#"><i class="icon-custom-form"></i> Meus Projetos </a></li>

                        @endif
                        @if(Auth::user()->type == 1)
                            <li><a href="#"><i class="icon-custom-form"></i> Meus Projetos </a></li>
                        @endif
                    </ul>
                @endif
            </li>
        </ul>

        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>
</div>