<div class="col-lg-3 col-md-3 col-sm-4">
    <div class="panel rounded shadow">
        <div class="panel-body">
            <div class="inner-all">
                <ul class="list-unstyled">
                    <li style="display: flex; justify-content: center" class="text-center">
                        <img data-no-retina="" class="img-circle img-responsive img-bordered-primary" width="300"
                             height="300" src="{{$user['photo']}}" alt="John Doe">
                    </li>
                    <li class="text-center">
                        <h4 class="text-capitalize">{{$user['name']." ".$user['surname']}}</h4>
                        <p class="text-muted text-capitalize">web designer</p>
                    </li>
                    @if(!$user['myprofile']&& Auth::check())
                        @if(isset($user['request'])) @if($user['request']==true)

                            @if(isset($user['sender']))

                                <link rel="stylesheet" href="{{asset('assets/profile')}}/hovermenu.css">
                                <div class="dropdown       text-center btn-block">
                                    <button class="dropbtn   btn text-center btn-block">Sana istek Gönderdi</button>
                                    <div class="dropdown-content     text-center btn-block   ">
                                        <a href="#">Kabul Et</a>
                                        <a href="@php  $str = Request::url();

$id=explode('/', $str); $id=$id[4]; ; echo url("request/$id/deny")  @endphp">Reddet</a>
                                    </div>
                                </div>
                            @else
                                <span      disabled class="btn btn-success text-center btn-block">

                                {{ "İstek Gönderildi "}}</span>

                            @endif



                        @else yok  @endif

                        @else


                            <a class="btn btn-success text-center btn-block" href="@php $id= Auth::user()->id;  $str = Request::url();

$id2=explode('/', $str); $id2=$id2[4]; ; echo url("request/$id/$id2")  @endphp">

                                {{ __('İstek Gönder') }}</a>


                        @endif
                    @endif


                    <li>
                        <div class="btn-group-vertical btn-block">
                            @if($user['myprofile'])     <a href=" @php $id= Auth::user()->id;
  echo( url("profile/$id/edit"));
                            @endphp   " style="margin-top:5px" class="btn btn-default"><i
                                    class="fa fa-cog pull-right"></i>Edit
                                Account</a> @endif

                            @if($user['myprofile'])
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a style="display: block" class="btn btn-default" href="{{ route('logout')}}"
                                       onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        <i style="margin-top: 5px"
                                           class="fa fa-sign-out pull-right"></i> {{ __('Çıkış Yap') }}</a>

                                </form>
                                @endif

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- /.panel -->





