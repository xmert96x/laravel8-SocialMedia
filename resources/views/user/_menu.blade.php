
<div class="col-lg-3 col-md-3 col-sm-4">
    <div class="panel rounded shadow">
        <div class="panel-body">
            <div class="inner-all">
                <ul class="list-unstyled">
                    <li  style="display: flex; justify-content: center" class="text-center">
                        <img data-no-retina="" class="img-circle img-responsive img-bordered-primary" width="300" height="300" src="{{$photo}}" alt="John Doe">
                    </li>
                    <li class="text-center">
                        <h4 class="text-capitalize">{{$name}}</h4>
                        <p class="text-muted text-capitalize">web designer</p>
                    </li>

                    <li></li>
                    <li>
                        <div class="btn-group-vertical btn-block">
                            @if($myprofile)   <a href="" class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a> @endif

                        @if($myprofile)              <form   method="POST" action="{{ route('logout') }}">
                    @csrf

                        <a   style="display: block" class="btn btn-default" href="{{ route('logout')}}"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            <i style="margin-top: 5px" class="fa fa-sign-out pull-right"></i>  {{ __('Çıkış Yap') }}</a>

                        </form>
@endif

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- /.panel -->

