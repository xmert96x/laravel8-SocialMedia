<div>

    {{$x}}



 {{$text["1"]}}
    {{$file}}
    @foreach( $Post as $item)


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
                        <a href="javascript:void(0)" wire:click="likes('{{$item->likes}}','{{$item->id}}')"
                           class="text-white h4"><i class="fa fa-heart"></i> {{$item->likes}}</a>
                    </div><!-- /.pull-right -->
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body no-padding">
                    <div class="inner-all block">
                        <!--    <h4>Upload on my album :D</h4>-->
                        <p>
                            {{$item->content}}              </p>
                        <!--    <blockquote class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, delectus!</blockquote>-->
                        @php $media = $item->media ;
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
                    <form wire:submit.prevent="comments()" action="#" class="form-horizontal inner-all">
                        <div class="has-feedback no-margin   " style="position: relative">
                            @if (Auth::check())
                                <div style="padding: 0;">    <textarea wire:model.lazy="text.1"

                                                                       id="input{{$item->id}}"
                                                                       class="form-control     "
                                                                       style="height: 20px;  resize: none; margin: 0; z-index:-100;   overflow-y:hidden; padding-right: 5px;   padding-bottom: 38px;  "

                                                                       onchange="warning(this.id)"
                                                                       oninput="warning(this.id)" type="text"
                                                                       placeholder="Yorum Yazın.."></textarea>
                                </div>

                                <div id="imglist{{$item->id}}"
                                     style="position: absolute; bottom: 7px; display:block; padding-left: 5px;
                                        width:100%;"></div>

                                <div id="buttonbox{{$item->id}}"
                                     style=" position: absolute;  bottom:0px; right:2px;  padding: 0;   display:inline-table;    height: 38px;">
                                    <button class="btn btn-theme inputWrapper"
                                            style="display:inline-table;float: left;">
                                        <i class="fa fa-camera"></i>
                                        <input wire:model="file" style="font-size: 99px"
                                               accept="image/x-png,image/gif,image/jpeg"
                                               id="file{{$item->id}}"
                                               onchange="showimage(this.id)" name="media"
                                               type="file"
                                               class="fileInput "/>
                                    </button>
                                    <button onclick="warning('input{{$item->id}}')" href="" type="button"
                                            style=" height: 34px; cursor: pointer; "
                                            id="emoji-button{{$item->id}}"
                                            class="btn btn-theme  fa fa-smile-o"></button>
                                </div>
                                <div style="     clear:both;padding-left:5px;font-size:x-small" id="note{{$item->id}}">
                                </div>
                                <script>

                                    var input = document.querySelector(".emoji-picker__search");


                                    const button{{$item->id}} = document.querySelector('#emoji-button{{$item->id}}');

                                    const picker{{$item->id}} = new EmojiButton();
                                    picker{{$item->id}}.on(`emoji`, emoji => {
                                        document.querySelector('#input{{$item->id}}').value += emoji;
                                    });
                                    button{{$item->id}}.addEventListener('click', () => {
                                        picker{{$item->id}}.togglePicker(button{{$item->id}});
                                    });

                                </script>
                            @endif</div>
                    </form><!-- /.form-horizontal -->
                </div><!-- /.panel-footer -->
            </div><!-- /.panel -->

        </div>


    @endforeach




    @livewireStyles

    <script src="{{ mix('js/app.js') }}"></script>


    @livewireScripts


    <script>


        function showimage(y) {

            var z = 0;
            var a;
            var x = document.getElementById(y);
            var regex = /[+-]?\d+(?:\.\d+)?/g;
            var match;
            var number;
            var i = 0;
            while (match = regex.exec(x.id)) {
                number = match[0];
            }
            var file = document.getElementById('file' + number);
            var buttonbox = document.getElementById("buttonbox" + number);
            var imglist = document.getElementById("imglist" + number);
            var input = document.getElementById('input' + number);
            var i = 0;
            imglist.innerHTML = "";
            input.style.paddingBottom = 38 + "px";
            input.style.height = "";
            input.style.height = input.scrollHeight + "px"


            imglist.innerHTML = "<span id='imglistcontent" + number + "' style='  position:relative; height: fit-content'> <i id='close'  onclick='postimagedelete(\"" + number + "\")'  class='fa fa-times'></i><img src='' style='max-height: 250px; max-width:250px' id='resim" + number + "'></span>";

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

        function warning(y) {


            x = document.getElementById(y);

            x.style.height = "";
            x.style.height = x.scrollHeight + "px"


            var regex = /[+-]?\d+(?:\.\d+)?/g;
            var match;
            var number;
            var i = 0;
            while (match = regex.exec(x.id)) {
                number = match[0];

            }
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


        }

        function postimagedelete(x) {
            alert(x);
        }


    </script>
