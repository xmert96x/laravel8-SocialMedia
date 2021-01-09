<div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a href="http://usebootstrap.com/theme/facebook" class="navbar-brand logo">b</a>
</div>
<nav class="collapse navbar-collapse" role="navigation">
    <form class="navbar-form navbar-left">
        <div class="input-group input-group-sm" style="max-width:360px;">
            <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
    </form>
    <ul class="nav navbar-nav">
        <li>
            <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
        </li>
        <li>
            <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
        </li>
        <li>
            <a href="#"><span class="badge">badge</span></a>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">@if (isset(Auth::user()->name))
                    <img  height="*" width="24" src=" {{Auth::user()->profile_photo_url}}" alt="{{ Auth::user()->name}}" class="rounded-full h-20 w-20 object-cover">
                @else

                    <i class="glyphicon glyphicon-user"></i>
                @endif
            </a>
            <ul class="dropdown-menu">
                <li><a href="/profile/{{Auth::user()->id}}">Profile</a></li>
                <form   method="POST" action="{{ route('logout') }}">
                    @csrf  <li>

                        <a  style="display: block; padding-bottom: 2px; padding-top: 2px;    " href="{{ route('logout')}}"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Çıkış Yap') }}</a>

               </form> </li>

                <li><a href="">More</a></li>
                <li><a href="">Moreee</a></li>
                <li><a href="">More</a></li>
            </ul>
        </li>
    </ul>
</nav>

