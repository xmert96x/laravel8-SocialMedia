<div class="col-sm-6">


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
        <div class="panel-body no-padding">
            <div class="inner-all block">
                <!--    <h4>Upload on my album :D</h4>-->
                <p>
                    {{$Post['content']}}              </p>
                <!--    <blockquote class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, delectus!</blockquote>-->
                @php $media = $Post["media"] ;
            $media = json_decode($media);  @endphp
                @if(isset($media))
                    @foreach( $media as $img)
                        <img data-no-retina="" src="{{url($img)}}" alt="..." width="100"> @endforeach
                @endif
            </div><!-- /.inner-all -->
            <div class="inner-all bg-success">
                view all <a href="#">7 comments</a>
            </div>
        </div><!-- /.panel-body -->
        <div class="panel-footer no-padding no-border">
            <div class="media inner-all no-margin">
                <div class="pull-left">
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="..."
                         class="img-post2">
                </div><!-- /.pull-left -->
                <div class="media-body">
                    <a href="#" class="h4">John Doe</a>
                    <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. </small>
                    <em class="text-xs text-muted">Posted on <span
                            class="text-danger">Dec 08, 2014</span></em>
                </div><!-- /.media-body -->
            </div><!-- /.media -->
            <div class="line no-margin"></div><!-- /.line -->
            <div class="media inner-all no-margin">
                <div class="pull-left">
                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="..."
                         class="img-post2">
                </div><!-- /.pull-left -->
                <div class="media-body">
                    <a href="#" class="h4">John Doe</a>
                    <small class="block text-muted">Quaerat, impedit minus non commodi facere doloribus nemo
                        ea voluptate nesciunt deleniti.</small>
                    <em class="text-xs text-muted">Posted on <span
                            class="text-danger">Dec 08, 2014</span></em>
                </div><!-- /.media-body -->
            </div><!-- /.media -->
            <div class="line no-margin"></div><!-- /.line -->
            <div>
                <form wire:submit.prevent="" action="#" class="form-horizontal inner-all">
                    <div class="has-feedback no-margin   " style="position: relative">
                        @if (Auth::check())
                            <div style="padding: 0;">    <textarea wire:model="text"

                                                                   id="input{{$Post['id']}}"
                                                                   class="form-control     "
                                                                   style="height: {{$scroll}};  resize: none; margin: 0; z-index:-100;   overflow-y:hidden; padding-right: 5px;   padding-bottom: 38px;  "
                                                                   onload="warning2(this.id)"
                                                                   onchange="warning2(this.id)"
                                                                   oninput="warning2(this.id)" type="text"
                                                                   placeholder="Yorum Yazın.."></textarea>
                            </div>

                            <div id="imglist{{$Post['id']}}"
                                 style="position: absolute; bottom: 7px; display:block; padding-left: 5px;
                                        width:100%;"> </div>

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

<script src="{{ mix('js/app.js') }}"></script>


@livewireScripts

<script>


    function showimage(y) {
        console.log("y:" + typeof (y));
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


        imglist.innerHTML = "<span id='imglistcontent" + number + "' style='  position:relative; height: fit-content'> <i id='close'  onclick='postimagedelete(\"" + number + "\")'  class='fa fa-times'></i><img src='    @if($file){{$file->temporaryUrl()}} @endif' style='max-height: 250px; max-width:250px' id='resim" + number + "'></span>";

        for (i; i < file.files.length; i++) {
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
    window.addEventListener('name-updated2', event => {
        showimage(event.detail.itemid);})
    window.addEventListener('name-updated', event => {
        showimage(event.detail.itemid);
    warning2(event.detail.itemid);


    })

    var i = 0;
    var post = [["1", "2"]];

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

