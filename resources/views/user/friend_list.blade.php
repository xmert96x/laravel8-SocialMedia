@extends('layouts.user')

@section('title','Social Media')
@section('description')
    Türkiyenin En iyi yeri
@endsection
@section('keywords','Facebook','Twitter','İnstagram')




@section('content')


        <style type="text/css">




            .directory-list, .directory-info-row .social-links {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }

            .directory-list li {
                border-left: 3px solid #f1f2f7;
                display: table-cell;
                width: 1%;
            }

            .directory-list li a {
                display: block;
                padding: 8px 0;
                text-align: center;
                text-transform: uppercase;
                background: #fff;
                color: #7A7676;
                -moz-transition: all 0.2s ease-out 0s;
                -webkit-transition: all 0.2s ease-out 0s;
                transition: all 0.2s ease-out 0s;
                text-decoration: none;
                border-radius: 5px;
                -webkit-border-radius: 5px;
            }

            .directory-info-row .thumb {
                border-radius: 5px;
                -webkit-border-radius: 5px;
                height: auto;
                width: 175px;
                margin-right: 10px;
            }

            .directory-list li a:hover, .directory-info-row .social-links li a:hover {
                background: #ff6c60;
                color: #fff;
            }

            .directory-info-row {
                display: inline-block;
                width: 100%;
                margin-top: 20px;
            }

            .directory-info-row h4, .directory-info-row a {
                color: #424F63;
            }

            .h4, h4 {
                font-size: 18px;
            }
s
            .directory-info-row .social-links {
                display: inline-block;
                margin-bottom: 10px;
            }

            .directory-info-row .social-links li {
                display: inline-block;
            }

            ul li {
                list-style: none;
            }

            .directory-info-row .social-links li a {
                background: #EFF0F4;

                display: flex;
                height: 30px;
                line-height: 30px;
                text-align: center;

                border-radius: 5px;
                -webkit-border-radius: 5px;
                color: #7A7676;
            }

            .social-links{max-width:175px; }

        </style>


        <div class="container">
            <!--<div class="row">
                <ul class="directory-list">
                    <li><a href="#">a</a></li>
                    <li><a href="#">b</a></li>
                    <li><a href="#">c</a></li>
                    <li><a href="#">d</a></li>
                    <li><a href="#">e</a></li>
                    <li><a href="#">f</a></li>
                    <li><a href="#">g</a></li>
                    <li><a href="#">h</a></li>
                    <li><a href="#">i</a></li>
                    <li><a href="#">j</a></li>
                    <li><a href="#">k</a></li>
                    <li><a href="#">l</a></li>
                    <li><a href="#">m</a></li>
                    <li><a href="#">n</a></li>
                    <li><a href="#">o</a></li>
                    <li><a href="#">p</a></li>
                    <li><a href="#">q</a></li>
                    <li><a href="#">r</a></li>
                    <li><a href="#">s</a></li>
                    <li><a href="#">t</a></li>
                    <li><a href="#">u</a></li>
                    <li><a href="#">v</a></li>
                    <li><a href="#">w</a></li>
                    <li><a href="#">x</a></li>
                    <li><a href="#">y</a></li>
                    <li><a href="#">z</a></li>
                </ul>
            </div>-->

            <div class="directory-info-row">
                <div class="row">
                    @foreach($friend_list as $friend)

                        @php


                        if($friend->friend1!=$user["id"]){$id=$friend->friend1;   $data=App\Http\Controllers\Usercheck::Userdata("$friend->friend1");}
                        else{$data=App\Http\Controllers\Usercheck::Userdata("$friend->friend2");
                                $id=$friend->friend2;
                        }
                        @endphp
                        <div class="col-md-6 ">
                            <div class="panel">
                                <div class="panel-body" style="display:flex;">
                                    <div class="media" >
                                        <a class="pull-left" href="/profile/{{$user["id"]}}">
                                            <img class="thumb media-object"
                                                 src="{{$data["photo"]}}" alt=""/>
                                        </a>
                                        <div class="media-body">
                                            <h4> {{$data["name"]}} {{$data["surname"]}} <span
                                                    class="text-muted small"> - UI Engineer</span></h4>
                                            <ul class="social-links">
                                                @php
                                                    echo App\Http\Controllers\Usercheck::get_id($id);
                                                @endphp
                                            </ul>
                                            <address>
                                                <strong>Bootdey, Inc.</strong><br/>
                                                Vamoil Ave, Suite 23<br/>
                                                Dream land, Australia <br/>
                                                <abbr title="Phone">P:</abbr> (142) 454-7890
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>





                    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
            </div></div>


@endsection



