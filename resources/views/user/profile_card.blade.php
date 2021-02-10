<link rel="stylesheet" href="{{asset('assets/profile')}}/card.css">

<div class="container">
    <div class="row">
        <div class="" style="max-width:250px; padding-left: 10px; padding-right: 10px;">

            <div style="  text-align: center;" class="profile-card ">
                <img src="{{Auth::user()->profile_photo_url}}" alt="user" class="profile-photo">
                <h5 style=" 150px;" ><a href="{{url("/profile/".Auth::user()->id)}}" class="text-white">{{Auth::user()->name}} {{ Auth::user()->surname}}</a></h5>
                <a  style="min-width: 100px; display: flex" href="{{url("/profile/".Auth::user()->id."/friendlist")}}" class="text-white"><i class="fa fa-user"></i >{{App\Http\Controllers\Usercheck::friend_count(Auth::user()->id)}} Arkadaş</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
                <li><i class="fa fa-list-alt icon1"></i><div><a href="#">My Newsfeed</a></div></li>
                <li><i class="fa fa-users icon2"></i><div><a href="#">People Nearby</a></div></li>
                <li><i class="fa fa-user icon3"></i><div><a href="{{url("/profile/".Auth::user()->id."/friendlist")}}">Arkadaşlar</a></div></li>
                <li><i class="fa fa-comments icon4"></i><div><a href="#">Messages</a></div></li>
                <li><i class="fa fa-picture-o icon5"></i><div><a href="#">Images</a></div></li>
                <li><i class="fa fa-video-camera icon6"></i><div><a href="#">Videos</a></div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
                <div class="title" style="word-break:break-all;">Chat online</div>
                <ul class="online-users list-inline">
                    <li><a href="#" title="Linda Lohan"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Sophia Lee"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="John Doe"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Alexis Clark"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="James Carter"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Robert Cook"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Richard Bell"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Anna Young"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Julia Cox"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                </ul>
            </div><!--chat block ends-->
        </div>
    </div>
</div>

