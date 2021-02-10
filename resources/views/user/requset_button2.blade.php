@if(!$user['myprofile']&& Auth::check())
    @if(!$user["friend_status"])
        @if(isset($user['request']))
            @if($user['request']==true)
                @if(isset($user['sender']))

                    <div class="dropdown       text-center btn-block">
                        <button class="dropbtn   btn text-center btn-block">Sana istek Gönderdi</button>
                        <div class="dropdown-content     text-center btn-block   ">
                            <a href="
                                {{url("request/".".$user_id."."/accept")}}
                          ">Kabul Et</a>
                            <a href="
                                 {{url("request/".".$user_id."/"deny")}}
                                ">Reddet</a>
                        </div>
                    </div>
                @else
                    <div class="dropdown       text-center btn-block">
                        <button disabled class="dropbtn   btn text-center btn-block">İstek Gönderdi</button>
                        <div class="dropdown-content     text-center btn-block   ">
                            <a style="flex-basis: 100%"  href="
                               {{url("request/".$user_id."/undo")}}
                                ">İsteği Geri Al</a>
                        </div>
                    </div>

                @endif
            @else
                yok
            @endif
        @else
            <a class="btn btn-success text-center btn-block" href="{{url("request/".$user_id)}}">
                {{ __('İstek Gönder') }}</a>
        @endif

    @else
        <div class="dropdown       text-center btn-block">
            <button disabled class="dropbtn   btn text-center btn-block">Arkadaşlar</button>
            <div class="dropdown-content     text-center btn-block   ">

                <a style="flex-basis: 100%; width:100%;" href="
                        {{url("friend/".$user_id."/delete")}}
                    ">Arkadaşlıktan Çıkar</a>
            </div>
        </div>
    @endif    @endif
<link rel="stylesheet" href="{{asset('assets/profile')}}/hovermenu.css">

