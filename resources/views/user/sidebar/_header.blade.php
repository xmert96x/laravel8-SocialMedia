<div id="wrapper" class="wrapper-content" xmlns="http://www.w3.org/1999/html">

    <div id="sidebar-wrapper" style="padding-top: 25px; padding-left: 0px; padding-right: 0px; ">
        @if(Auth::check())  @include("user.profile_card")@endif
    </div>

    <div id="page-content-wrapper">
        <nav style="padding: 0; " class="navbar navbar-default">
            <div class="">
                <div style="margin-left: 20px;" class="  navbar-nav navbar-left">
                    @if(Auth::check())
                        <button style="margin-top: 5px;   float: left;"
                                class="btn-menu btn btn-success btn-toggle-menu"
                                type="button">
                            <i class="fa fa-bars"></i>
                        </button>@endif


                    <button onclick="toogle()" style="margin-left:5px; float: left;  cursor:pointer; margin-top: 5px"
                            class="btn-menu btn btn-success searchbuttuon"
                            type="button">
                        <i style="  " class="fa fa-search"></i>
                    </button>
                </div>
                <ul class="nav navbar-nav navbar-right" style="margin-right: 5px;   float: right;">
                    @if( Auth::check())
                        <li style=" float: left;">

                            <i class="ti-panel"></i>

                            <form style="display: inline-block" class="logout" method="POST"
                                  action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout')}}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Çıkış Yap') }}</a>

                            </form>

                        </li>@else
                        <li style=" float: left;">
                            <a href="{{url("")}}">
                                <i class="ti-settings"></i>
                                <p>Giriş Yap</p>
                            </a></li>
                        <li style=" float: left;">
                            <a href="http://localhost:8000/register">
                                <i class="ti-settings"></i>
                                <p>Kayıt ol</p>
                            </a>
                        </li>@endif

                    <li id="menu" style=" float: left;">

                        <i class="ti-settings"></i>


                        <div>

                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               class="navbar-btn btn btn-default btn-plus "
                               style="margin-left:15px;" href="#"><i style="color:#dd1111;"
                                                                     class="glyphicon glyphicon-home"></i> Home
                                <small><i class="glyphicon glyphicon-chevron-down"></i></small></a>
                            <ul class="nav dropdown-menu">
                                <li><a href="#"><i style="color:#1111dd;" class="glyphicon glyphicon-user"></i>
                                        Profile</a>
                                </li>
                                <li><a href="#"><i style="color:#0000aa;" class="glyphicon glyphicon-dashboard"></i>
                                        Dashboard</a></li>
                                <li><a href="#"><i style="color:#11dd11;" class="glyphicon glyphicon-inbox"></i>
                                        Pages</a></li>
                                <li class="nav-divider"></li>
                                <li><a href="#"><i style="color:#dd1111;" class="glyphicon glyphicon-cog"></i> Settings</a>
                                </li>
                                <li><a href="#"><i class="glyphicon glyphicon-plus"></i> More..</a></li>
                            </ul>
                        </div>


                    </li>


                </ul>

                <div id="searchbar"
                     style="     margin-left: 7px; margin-right: 7px;  @if(!Auth::check())max-width:calc(100% - 373px); @endif @if( Auth::check())max-width:calc(100% - 294px); @endif display: inline-block;      ">           @livewire("searchbar")
                </div>

            </div>
        </nav>


        <style> @media screen and (max-width: 767px) {
                #menu {
                    margin-top: -5px;
                }

                .searchbuttuon, ul[class="nav navbar-nav navbar-right"] {
                    margin-top: 8px;
                }

                .logout {
                    margin-top: 10px;
                }
            }

            @media screen and (min-width: 767px) {
                .searchbuttuon, ul [class="nav navbar-nav navbar-right"] {
                    margin-top: 8px;
                }

                .logout {
                    margin-top: 15px;
                }

                #menu {
                    margin-top: 0px;
                }
            }

            @media screen and (max-width: 767px) {
                .searchbuttuon {
                    margin-top: -35px;
                }


            }

            @media screen and (min-width: 767px) {
                .searchbuttuon {
                    margin-top: 8px;
                }


            }

            @media screen and (max-width: 767px) {

                #searchbar {
                    visibility: hidden;
                    display: none;
                    min-width: 100%;
                }

                 .searchbuttuon{             visibility: visible;

            }

            @media screen and (min-width: 767px) {        .searchbuttuon{          visibility: hidden;}
            }


            }

        </style>

        <script>

            /*       window.addEventListener("resize", function () {
                       var searchbar = document.getElementById("searchbar");
                       if (document.documentElement.scrollWidth < 1125) {
                           if (searchbar.style.visibility === "hidden") {
                               searchbar.style.minWidth = "0"
                           } else {
                               searchbar.style.minWidth = "100%"
                           }
                       } else {
                           searchbar.style.minWidth = "0"
                       }
                   }, true);
       */

            function toogle() {
                var searchbar = document.getElementById("searchbar");
                if (searchbar.style.visibility === "hidden") {
                    searchbar.style.visibility = "visible";
                    searchbar.style.display = "inline-block";

                } else {
                    searchbar.style.visibility = "hidden";
                    searchbar.style.display = "none"


                }

            }
        </script>


        <link rel="stylesheet" href="{{asset('assets/profile')}}/menubutton.css">


