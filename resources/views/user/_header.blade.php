<style type="text/css">
    #post {
        padding: 0;
        border: 1px solid #ccc;
        border-color: #66afe9

    }

    #post:focus {
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition-property: border-color, box-shadow;
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px rgb(102 175 233 / 60%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px rgb(102 175 233 / 60%);
    }

    #input{{"main"}}  {
        border: none;
        outline: none;
        border-color: Transparent;;
        padding: 0px;
        width: 100%;
    }

    #input{{"main"}}:focus {
        border-color: #66afe9;
        border: none;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }


    #post2 {
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition-property: border-color, box-shadow;
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px rgb(102 175 233 / 60%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px rgb(102 175 233 / 60%);
    }
</style>

<script>function removec() {
        document.getElementById("myList2").removeChild(myList2.childNodes[0]);
    }


    function focusfunct() {
        document.querySelector("#post").setAttribute("id", "post2");
    }


    function display(a) {

        a.style.height = "";
        a.style.height = a.scrollHeight + "px";
        focusfunct();

    }

    async function display2(b) {

        b.style.height = "";
        b.style.height = b.scrollHeight + "px";


        document.querySelector("#post2").setAttribute("id", "post");

    }
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    work()

</script>
<div class="container bootstrap snippets bootdeys">
    <div class="row">
        @include("user._menu")
        @include("user._information ")

    </div>
    <div class="col-lg-9 col-md-9 col-sm-8">

        @include("user._cover")
        @if($page=="timeline"&&$user['myprofile'])
            <div class="divider"></div>
            <div class="panel rounded shadow">
                <form method="POST" enctype="multipart/form-data" action="{{url('createpost')}}">    @csrf
                    <div id="post" style="display: block"
                         oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                         disabled>

                        <textarea name="posttext" onkeyup="display2(this)" onkeydown="focusfunct()"
                                  onfocus="focusfunct(this)" onpaste="this.onchange();"
                                  oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'
                                  id="input{{"main"}}"

                                  class="form-control input-lg no-border" style=" resize: none; overflow: hidden;"
                                  placeholder="What are you doing?..."></textarea>


                        <br>
                        <div id="post-imagelist" style="    width: 100%;
    height: 100%;
overflow:auto;
    white-space:nowrap;"></div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" onclick="removec()" class="btn btn-success pull-right mt-5">POST</button>
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-user"></i></a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                            <li><a href="#">
                                    <div class="inputWrapper" style="display: table">
                                        <i class="fa fa-camera"></i>
                                        <div id="myList2"><input multiple accept="image/x-png,image/gif,image/jpeg"
                                                                 id="input0"
                                                                 onchange="myFunctionc(this.id)" name="input0[]"
                                                                 type="file"
                                                                 class="fileInput"/></div>
                                    </div>
                                </a>


                            </li>
                            <li id="emoji-button{{"main"}}"><a href="javascript:void(0)"><i
                                        class="fa fa-smile-o"></i></a>
                            </li>
                </form>
                </ul><!-- /.nav nav-pills -->
            </div><!-- /.panel-footer -->
    </div><!-- /.panel -->

    <script>

        var input = document.querySelector(".emoji-picker__search");


        const button{{"main"}} = document.querySelector('#emoji-button{{"main"}}');

        const picker{{"main"}} = new EmojiButton();
        picker{{"main"}}.on(`emoji`, emoji => {
            document.querySelector('#input{{"main"}}').value += emoji;
        });
        button{{"main"}}.addEventListener('click', () => {
            picker{{"main"}}.togglePicker(button{{"main"}});
        });

    </script> @else

    @endif


    <div class="row" style="         max-width:875px; display: flex;  ">
        <style>

            .inputWrapper {
                display: flex;
                overflow: hidden;
                position: relative;
                cursor: pointer;
                /*Using a background color, but you can use a background image to represent a button*/

            }

            .fileInput {
                display: table;
                cursor: pointer;
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                /*This makes the button huge so that it can be clicked on*/
                font-size: 50px;
            }

            .hidden {
                /*Opacity settings for all browsers*/
                opacity: 0;
                -moz-opacity: 0;
                filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0)
            }


            /*Dynamic styles*/
            .inputWrapper:hover {

            }

            .inputWrapper.clicked {

            }


        </style>

        <script>$(function () {
                $(".inputWrapper").mousedown(function () {
                    var button = $(this);
                    button.addClass('clicked');
                    setTimeout(function () {
                        button.removeClass('clicked');
                    }, 50);
                });
            });
        </script>


        <script>
            var y = 0;
            var z = 0;

            function myFunctionc(name) {
                document.getElementById("post-imagelist").innerHTML += "<img src='' style='max-height: 250px; max-width:250px' id='1 resim" + z + "'>";
                var input = document.getElementById(name);


                for (i = 0; i < input.files.length; i++) {
                    var fReader = new FileReader();
                    fReader.readAsDataURL(input.files[i]);
                    fReader.onloadend = function (event) {

                        var img = document.getElementById("1 resim" + z);
                        img.src = event.target.result;


                        z++;
                        document.getElementById("post-imagelist").innerHTML += "<img src='' style='max-height: 250px; max-width:250px' id='1 resim" + z + "'>";
                        document.getElementById("post-imagelist").scrollLeft = document.getElementById("post-imagelist").scrollWidth;
                    }

                    document.getElementById("post-imagelist").scrollLeft = document.getElementById("post-imagelist").scrollWidth;
                }
                var itm = document.getElementById("myList2").firstChild;
                var cln = itm.cloneNode(true);
                document.getElementById("myList2").appendChild(cln);


                y++;

                var itm = document.getElementById("myList2").firstChild.id = "input" + y;
                document.getElementById("post-imagelist").scrollLeft = document.getElementById("post-imagelist").scrollWidth;

            }


        </script>

