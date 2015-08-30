<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
                <li class="dropdown">
                    <a id="main-menu-toggle" href="#main-menu" class="">
                        <div class="iconset top-menu-toggle-white"></div>
                    </a>
                </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="index.html">
                <img src="{{ asset('img/logo.png') }}" class="logo" alt=""
                     data-src="{{ asset('img/logo.png') }}"
                     data-src-retina="{{ asset('img/logo.png') }}" width="106" height="21"/>
            </a>
            <!-- END LOGO -->
            <ul class="nav pull-right notifcation-center">
                <li class="dropdown" id="header_task_bar">
                    <a href="index.html" class="dropdown-toggle active" data-toggle="">
                        <div class="iconset top-home"></div>
                    </a>
                </li>
                <li class="dropdown" id="portrait-chat-toggler" style="display:none">
                    <a href="#sidr" class="chat-menu-toggle">
                        <div class="iconset top-chat-white "></div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="" id="layout-condensed-toggle">
                            <div class="iconset top-menu-toggle-dark"></div>
                        </a>
                    </li>
                </ul>
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="">
                            <div class="iconset top-reload"></div>
                        </a>
                    </li>
                    <li class="quicklinks">
                        <span class="h-seperate"></span>
                    </li>
                    <li class="quicklinks">
                        <a href="#" class="">
                            <div class="iconset top-tiles"></div>
                        </a>
                    </li>
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        <span class="add-on">
                            <span class="iconset top-search"></span>
                        </span>
                        <input name="" type="text" class="no-boarder " placeholder="Search Dashboard"
                               style="width:250px;">
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler">
                    <div class="profile-pic" style="float: right">
                        <img src="{{ asset('img/profiles/avatar_small.jpg') }}" alt=""
                             data-src="{{  asset('img/profiles/avatar_small.jpg') }}"
                             data-src-retina="{{  asset('img/profiles/avatar_small2x.jpg') }}" width="35" height="35"/>
                    </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <div class="iconset top-settings-dark "></div>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li>
                                <a href="user-profile.html"> Minha Conta</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{url('/logout')}}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                        </ul>
                    </li>
                    <li class="quicklinks"><span class="h-seperate"></span></li>
                    <li class="quicklinks">
                        <a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle">
                            <div class="iconset top-chat-dark "><span class="badge badge-important hide"
                                                                      id="chat-message-count">1</span></div>
                        </a>

                        <div class="simple-chat-popup chat-menu-toggle hide">
                            <div class="simple-chat-popup-arrow"></div>
                            <div class="simple-chat-popup-inner">
                                <div style="width:100px">
                                    <div class="semi-bold">David Nester</div>
                                    <div class="message">Hey you there</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>

<a href="#" class="scrollup">Scroll</a>