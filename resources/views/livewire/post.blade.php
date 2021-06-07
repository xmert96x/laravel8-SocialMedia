<div class="col-sm-12">
    <?php//  $image_info = getimagesize("https://www.itopya.com/picture258x50/logo_20200907180648-0709202018064815.png"); print_r($image_info); $width=($image_info[0]/$image_info[1])*100; echo $width
    ?>


    <div class="panel panel-success rounded shadow">
        <div class="panel-heading no-border">
            <div class="pull-left half">
                <div class="media">
                    <div class="media-object pull-left">
                        <img src="{{url($user['photo'])}}" alt="..." class="img-circle img-post">
                    </div>
                    <div class="media-body">
                        <a href="{{url("profile/".$user['id'])}}"
                           class="media-heading block mb-0 h4 text-white">{{$user['name']}}</a>
                        <span class="text-white h6">on 8th June, 2014</span>
                    </div>
                </div>
            </div><!-- /.pull-left -->
            <div class="pull-right">
                <a href="javascript:void(0)" wire:click="likes('{{$Post["likes"]}}','{{$Post['id']}}')"
                   class="text-white h4"><i class="fa fa-heart"></i> {{$Post["likes"]}}</a>
            </div><!-- /.pull-right -->
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div style="overflow: hidden;  word-break: break-all;" class="panel-body no-padding">
            <div class="inner-all block">
                <!--    <h4>Upload on my album :D</h4>-->
                <p>
                    {{$Post['content']}}              </p>
                <!--    <blockquote class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, delectus!</blockquote>-->
                @php $media = $Post["media"] ;
                $media = json_decode($media);  @endphp
                @php $count=0; @endphp
                @if(isset($media))
                    @foreach( $media as $img)
                        @php $count++; @endphp

                        @if($count<=4||count($media)<4)
                            @php     list($width, $height) = getimagesize("$img");

                              $image_info = getimagesize("$img");

                            if($height>$width) {$ratio=1;}
                            else {$ratio=2;} @endphp    @if($ratio==1)
                                <div class="thumbnail2">
                                    <img src="{{url($img)}}" height="150" alt="Image"/>
                                </div>
                            @endif
                            @if($ratio==2)
                                <div class="thumbnail2">
                                    <img src="{{url($img)}}" height="150" class="portrait2"/>
                                </div>
                            @endif
                        @endif

                        @if($count==4&&count($media)>4)
                            @if($ratio==1)  <span class="thumbnail2" style="position:relative; "><img
                                    style="position: absolute; z-index:1"
                                    data-no-retina="" src="{{url($img)}}"
                                    alt=""
                                    height="100">
                                <div style=" display:table;        width:150px; height:150px;background-color:#999999; opacity: 50%; z-index: 3;  position: relative;


                                      word-break: normal;
 "><span style="  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);"><h1>+{{count($media)-4}}</h1></span></div>
                            </span> @endif @if($ratio==2)  <span class="thumbnail2"
                                                                 style="position:relative;  "><img
                                    style="position: absolute; z-index:1"
                                    data-no-retina="" class="portrait2" src="{{url($img)}}"
                                    alt=""
                                    height="100">
                                <div style="  width:150px; height:150px;background-color:#999999; opacity: 50%; z-index: 3;position: relative;

   word-break: normal;


       "><span style=" display:table;  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);"> <h1>+{{count($media)-4}} </h1></span></div>
                                </span>@endif
                        @endif

                    @endforeach
                @endif
            </div><!-- /.inner-all -->
            <div wire:click="addcomments" style="clear: both;  visibility:{{$show}};"
                 class="cursor inner-all bg-success">
                Daha Fazla Yorum Göster
            </div>
        </div><!-- /.panel-body -->
        <div class="panel-footer no-padding no-border">
            <!--baslama-->
            @foreach($comments as $item)  @php $userdata=App\Http\Controllers\Usercheck::Userdata($item["author"]);// print_r( $userdata); @endphp
            <div class="media inner-all no-margin">
                <div class="pull-left">
                    <img src="{{$userdata["photo"]}}" alt="..."
                         class="img-post2">
                </div><!-- /.pull-left -->
                <div class="media-body">
                    <a href="{{url("/profile")."/".$item["author"]}}"
                       class="h4">{{$userdata["name"]}} {{$userdata["surname"]}}</a>
                    <small class="block text-muted">{{$item["text"]}}     </small>
                    <em class="text-xs text-muted">Posted on <span
                            class="text-danger">Dec 08, 2014</span></em>
                    <br> @php $media = $item["media"] ;
            $media = json_decode($media);  @endphp


                 {{print_r($media)}}
                </div> <!-- /.media-body -->
            </div><!-- /.media -->   @endforeach
            <div>
                <form enctype="multipart/form-data" action="#" class="form-horizontal inner-all">
                    <div class="has-feedback no-margin   " style="position: relative">
                        @if (Auth::check())
                            <div style="padding: 0;">    <textarea wire:target="Savecommnets"
                                                                   wire:loading.attr="disabled"
                                                                   wire:keydown.enter="Savecommnets" wire:model="text"

                                                                   id="input{{$Post['id']}}"
                                                                   class="form-control     "
                                                                   style="   resize: none; margin: 0; z-index:-100;   overflow-y:hidden; padding-right: 5px;   padding-bottom: 38px;  "
                                                                   onload="warning2(this.id)"
                                                                   onchange="warning2(this.id)"
                                                                   oninput="warning2(this.id)" type="text"
                                                                   placeholder="Yorum Yazın.."></textarea>
                            </div>

                            <div id="imglist{{$Post['id']}}"
                                 style="position: absolute; bottom: 7px; display:block; padding-left: 5px;
                                        width:100%;" wire:model="images"></div>

                            <div id="buttonbox{{$Post['id']}}"
                                 style=" position: absolute;  bottom:0px; right:2px;  padding: 0;   display:inline-table;    height: 38px;">
                                <button class="btn btn-theme inputWrapper"
                                        style="display:inline-table;float: left;">
                                    <i class="fa fa-camera"></i>
                                    <input wire:model="file" style="font-size: 99px"
                                           accept="image/x-png,image/gif,image/jpeg"
                                           id="file{{$Post['id']}}"
                                           name="media"
                                           type="file"
                                           class="fileInput "/>
                                </button>
                                <button onclick="warning2('input{{$Post['id']}}')" href="" type="button"
                                        style=" height: 34px; cursor: pointer; "
                                        id="emoji-button{{$Post['id']}}"
                                        class="btn btn-theme  fa fa-smile-o"></button>
                            </div>
                            <div style="     clear:both;padding-left:5px;font-size:x-small" id="note{{$Post['id']}}">
                            </div>
                            <script>

                                var input = document.querySelector(".emoji-picker__search");


                                const button{{$Post['id']}} = document.querySelector('#emoji-button{{$Post['id']}}');

                                const picker{{$Post['id']}} = new EmojiButton();
                                picker{{$Post['id']}}.on(`emoji`, emoji => {
                                    document.querySelector('#input{{$Post['id']}}').value += emoji;
                                });
                                button{{$Post['id']}}.addEventListener('click', () => {
                                    picker{{$Post['id']}}.togglePicker(button{{$Post['id']}});
                                });

                            </script>
                        @endif</div>
                </form>
            </div> @livewireStyles


        <!-- /.form-horizontal -->
        </div><!-- /.panel-footer -->
    </div><!-- /.panel -->


</div>


@livewireStyles


@livewireScripts

<script>


    function showimage(y) {
        if (typeof value == "string" && value.indexOf('$') > -1
        ) {
            if (y.includes("file")) {
                y = y.split("file")[1];
            }
        }
        var z = 0;
        var a;
        number = y;
        var file = document.getElementById('file' + number);
        var buttonbox = document.getElementById("buttonbox" + number);
        var imglist = document.getElementById("imglist" + number);
        var input = document.getElementById('input' + number);
        var i = 0;
        imglist.innerHTML = "";
        input.style.paddingBottom = 38 + "px";
        input.style.height = "";
        input.style.height = input.scrollHeight + "px"


        imglist.innerHTML = "<span id='imglistcontent" + number + "' style='  position:relative; height: fit-content'> <i id='close'  onclick='postimagedelete(\"" + number + "\")'  class='fa fa-times'></i><img src='     ' style='max-height: 250px; max-width:250px' id='resim" + number + "'></span>";

        for (i = 0; i < file.files.length; i++) {
            var fReader = new FileReader();
            fReader.readAsDataURL(file.files[i]);
            fReader.onloadend = function (event) {
                var img = document.getElementById("resim" + number);
                img.src = event.target.result;

            }
        }


        if (i === 0) {
            imglist.innerHTML = "";
            buttonbox.style.bottom = 6 + "px";
        }


        img = document.getElementById("resim" + number);
        img.onload = function () {
            var hg = (parseFloat(input.clientHeight) + parseFloat(this.height)) + parseFloat(imglist.style.bottom); //(height)
            input.style.height = hg + "px";
            hg = (parseFloat(input.style.paddingBottom) + parseFloat(this.height)) + parseFloat(imglist.style.bottom); //(bottom)
            input.style.paddingBottom = hg + "px"
            hg = parseFloat(this.height) + 4;
            buttonbox.style.bottom = hg + 'px';


        };

    }

    window.addEventListener('name-updated', event => {

        note = document.getElementById("note" + event.detail.itemid);
        x = document.getElementById("input" + event.detail.itemid);


        if (x.value !== "") {

            note.innerHTML = "Göndermek için <b>enter</b> tuşuna basın";
        }

        showimage(event.detail.itemid);
        warning2(event.detail.itemid);


    })


    function warning2(y) {


        x = document.getElementById(y);

            if (y.includes("input")) {
                y = y.split("input")[1];

        }
        number = y;

        x.style.height = "";
        x.style.height = x.scrollHeight + "px"
        buttonbox = document.getElementById("buttonbox" + number);
        imglitst = document.getElementById("imglist" + number)
        note = document.getElementById("note" + number);


        if (x.value !== "") {

            note.innerHTML = "Göndermek için <b>enter</b> tuşuna basın";


            if (imglitst.innerHTML === "") {

                buttonbox.style.bottom = 12 + "px";
                inc = parseFloat(x.style.height) + 5;

                x.style.height = inc + "px";
            } else {


                imglitst.style.bottom = 17 + "px"

            }

        } else {

            if (imglitst.innerHTML === "") {
                buttonbox.style.bottom = 0 + "px";
            } else {


                var hg = parseFloat(buttonbox.style.bottom) + 30;
                imglitst.style.bottom = 5 + "px";
                x.style.height = hg + "px";
                hg = hg + 10;
                x.style.paddingBottom = hg + "px";
            }


            note.innerHTML = "";
        }


        /*     if (count == 0) {
                console.log("girdi");
                post.push([number, scroll]);
            } else {
                for (var t = 0; t < post.length; t++) {
                    if (post[t][0] == number) {
                        post[t][1] = scroll;

                    }
                }
            }
            console.log(post)
       */
    }

    function postimagedelete(x) {
        alert(x);
    }


</script>

<style>
    .thumbnail2 {
        float: left;
        position: relative;
        width: 150px;
        height: 150px;
        overflow: hidden;
    }

    .thumbnail2 img {
        position: absolute;
        left: 50%;
        top: 50%;
        height: 100%;
        width: auto;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .thumbnail2 img.portrait2 {
        width: 100%;
        height: auto;
    }

    .cursor:hover {
        cursor: pointer;
    }
</style>
