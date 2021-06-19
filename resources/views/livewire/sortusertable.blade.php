<div>
    <style type="text/css">
        #hover:hover {
            background: #ffffff;
        }
    </style>
    <div class="col-12 col-lg-12     col-xxl-12 d-flex">
        <div style="display: table" class="card col-12 ">
            <div class="card-header">

                <h5 class="card-title mb-0">Kullanıcı Listesi</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                <tr>
                    @php if($dir=="asc") $arrow="down";
                   if($dir=="desc")$arrow="up"; @endphp
                    <th style="cursor: pointer;" wire:click="click('name')">Ad @if($sort=="name")<i
                            class="fa fa-arrow-{{$arrow}}"></i>@endif</th>
                    <th style="cursor: pointer;" wire:click="click('surname')">Soyad @if($sort=="surname")<i
                            class="fa fa-arrow-{{$arrow}}"></i>@endif</th>
                    <th style="cursor: pointer;" wire:click="click('email')" class="d-none d-md-table-cell">
                        Eposta @if($sort=="email")<i class="fa fa-arrow-{{$arrow}}"></i>@endif</th>
                    <th style="cursor: pointer;" wire:click="click('created_at')" class="d-none d-xl-table-cell">Üyelik
                        Tarihi @if($sort=="created_at")<i class="fa fa-arrow-{{$arrow}}"></i>@endif</th>
                    <th style="cursor: pointer;" wire:click="click('updated_at')" class="d-none d-xl-table-cell">Son
                        Giriş @if($sort=="updated_at")<i class="fa fa-arrow-{{$arrow}}"></i>@endif</th>

                    <th></th>
                </tr>
                </thead>
                <tbody>


                @foreach($userlist as  $user)

                    <tr wire:key="{{$user["email"]}}">
                        <td>{{$user["name"]}}</td>
                        <td>{{$user["surname"]}}</td>
                        <td class="d-none d-md-table-cell">{{$user["email"]}}</td>
                        <td class="d-none d-xl-table-cell">{{$user["created_at"]}}</td>
                        <td class="d-none d-xl-table-cell">{{$user["updated_at"]}}</td>
                        <td>  <span style="padding:3px; font-size: 10px" type="button" class="badge bg-success"
                                    data-toggle="modal" data-target="#exampleModalCenter{{$user["id"]}}">
        Profile Detayı
    </span>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter{{$user["id"]}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 style="font-weight: bold;" class="modal-title"
                                                id="exampleModalLongTitle">Profil Detayı</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            {{ App\Http\Controllers\admin::user_detail((string)$user["id"])}}


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                        <th></th>
                    </tr>@endforeach


                <td id="hover" colspan="6" class=" d-xl-table-cell">
                    <div style="  display: flex;
  justify-content: center;
  align-items: center;"> {{$userlist->links()}}</div>
                    <style>
                        nav > .pagination > {
                            display: flex;
                            flex: 1;
                            width: 100%;
                        }
                    </style>
                </td>
                </tbody>
            </table>
        </div>
    </div>
    <style>


        body .modal-dialog { /* Width */
            max-width: fit-content;

        }

        button.close {
            -webkit-appearance: none;
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
        }

        .close {
            float: right;
            font-size: 21px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            filter: alpha(opacity=20);
            opacity: .2;
            cursor: pointer !important;
        }
    </style>
</div>
@livewireStyles


@livewireScripts
<script src="{{ mix('js/app.js') }}"></script>
<script>var i=0;
    document.addEventListener('livewire:load', function () {
        document.addEventListener("keydown", event => {
            if (event.isComposing || event.keyCode === 39) {
                i++; alert("dede"+i);
            }
            // do something
        });


    })
</script>
