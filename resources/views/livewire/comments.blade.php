<div> {{$rand}}
    <form wire:submit.prevent="" action="#" class="form-horizontal inner-all">
        <div class="has-feedback no-margin   " style="position: relative">
            @if (Auth::check())
                <div style="padding: 0;">    <textarea wire:model="text"

                                                       id="input{{$Post['id']}"
                                                       class="form-control"
                                                       style="height: {{$scroll}};  resize: none; margin: 0; z-index:-100;   overflow-y:hidden; padding-right: 5px;   padding-bottom: 38px;  "
                                                       onload="warning2(this.id)"
                                                       onchange="warning2(this.id)"
                                                       oninput="warning2(this.id)" type="text"
                                                       placeholder="Yorum Yazın.."></textarea>
                </div>

                <div id="imglist{{$Post['id']}}"
                     style="position: absolute; bottom: 7px; display:block; padding-left: 5px;
                                        width:100%;">    @if ($file)
                        <span id="imglistcontent{{$Post['id']}}" style="position: relative; height: fit-content"><i
                                id="close" onclick="postimagedelete({{$Post['id']})" class="fa fa-times"></i> <img
                                src="{{ $file->temporaryUrl() }}" style="max-height:250px; max-width:250px;" id="resim{{$Post['id']}}"></span>
                    @endif</div>

                <div  id="buttonbox{{$Post['id']}}"
                     style=" position: absolute;  bottom:0px; right:2px;  padding: 0;   display:inline-table;    height: 38px;">
                    <button class="btn btn-theme inputWrapper"
                            style="display:inline-table;float: left;">
                        <i class="fa fa-camera"></i>
                        <input wire:model.lazy="file" style="font-size: 99px"
                               accept="image/x-png,image/gif,image/jpeg"
                               id="file{{$Post['id']}}"
                               onchange="showimage(this.id)" name="media"
                               type="file"
                               class="fileInput "/>
                    </button>
                    <button onclick="warning2('input{{$Post['id']}}')" href="" type="button"
                            style=" height: 34px; cursor: pointer; "
                            id="emoji-button{{$Post['id']}"
                            class="btn btn-theme  fa fa-smile-o"></button>
                </div>
                <div style="     clear:both;padding-left:5px;font-size:x-small" id="note{{$Post['id']}}">
                </div>
                <script>

                    var input = document.querySelector(".emoji-picker__search");


                    const button{{$Post['id']}} = document.querySelector('#emoji-button{{$Post['id']}}');

                    const picker{{$Post['id']}} = new EmojiButton();
                    picker{{$Post['id']}}.on(`emoji`, emoji => {
                        document.querySelector('#input{{$itemid}}').value += emoji;
                    });
                    button{{$Post['id']}}.addEventListener('click', () => {
                        picker{{$Post['id']}}.togglePicker(button{{$Post['id']}});
                    });

                </script>
            @endif</div>
    </form>
</div>    @livewireStyles

<script src="{{ mix('js/app.js') }}"></script>
@livewireScripts
<script>
    window.addEventListener('loads', event => {

        warning2(event.detail.itemid);
    })


</script>
