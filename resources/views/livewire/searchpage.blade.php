<div>
    <div class="container">
        <div class="row">
            <!-- BEGIN SEARCH RESULT -->
            <div class="col-md-12">
                <div class="grid search">
                    <div class="grid-body">
                        <div class="row">
                            <!-- BEGIN FILTERS -->
                            <div class="col-md-3">
                                <h2 class="grid-title"><i class="fa fa-filter"></i> Filtreler</h2>
                                <hr>

                            <!-- BEGIN FILTER BY CATEGORY -->
                                <h4>Seçenekler</h4>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> Şehir</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> Meselek</label>
                                </div>
                                <!-- END FILTER BY CATEGORY -->

                                <div class="padding"></div>

                                <!-- BEGIN FILTER BY DATE -->
                                <h4>Doğum Tairihi:</h4>
                                From
                                <div class="exmp-wrp">
                                    <div class="btn-wrp">
                                        <input type="date" class="btn-clck"/>
                                    </div>
                                    <span class="input-group-addon bg-blue btndate"><i class="fa fa-th"></i></span>
                                </div>

                                To
                                <div class="exmp-wrp">
                                    <div class="btn-wrp">
                                        <input type="date" class="btn-clck"/>
                                    </div>
                                    <span class="input-group-addon bg-blue btndate"><i class="fa fa-th"></i></span>
                                </div>
                                <!-- END FILTER BY DATE -->

                                <div class="padding"></div>


                            </div>
                            <!-- END FILTERS -->
                            <!-- BEGIN RESULT -->
                            <div class="col-md-9">
                                <h2><i class="fa fa-file-o"></i> Arama Sonuçları</h2>
                                <hr>
                                <!-- BEGIN SEARCH INPUT -->

                                <!-- END SEARCH INPUT -->
                                <p>"{{$request}} ile eşleşen tüm sonuçlar gösteriliyor"</p>

                                <div class="padding"></div>

                                <div class="row">
                                    <!-- BEGIN ORDER RESULT -->
                                    <div class="col-sm-6">
                                        <div class="btn-group">
                                            <button wire:loading.attr="disabled" type="button" class="btn btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                Sırlama<span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="javascript:void(0)" wire:click="sort()">Varsayılan</a></li>
                                                <li><a href="javascript:void(0)" wire:click="sort1()">Ad</a></li>

                                                <li><a href="javascript:void(0)" wire:click="sort2()">Soyad</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END ORDER RESULT -->

                                    <!--<div class="col-md-6 text-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>
                                  </div>
                                    </div>-->
                                </div>

                                <!-- BEGIN TABLE RESULT -->
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                        @foreach($result as $item)      @if(Auth::check()&&Auth::user()->id!=$item->id)
                                            <tr>
                                                @php $userdata=App\Http\Controllers\Usercheck::Userdata($item->id);// print_r( $userdata); @endphp
                                                <td class="image"><a href="{{url("/profile/".$item->id)}}"><img
                                                            src="{{$userdata["photo"]}}"
                                                            alt=""></a></td>
                                                <td class="product " style="vertical-align: middle"><strong
                                                        style=" "> <a
                                                            href="{{url("/profile/".$item->id)}}">{{$item->name." ".$item->surname}}</a></strong>
                                                </td> @php $user=$userdata;@endphp

                                                <td style="vertical-align: middle" class=" text-right"><span
                                                        style="float:right;max-width:20px; min-width: 124px; display:table">@include("user.request_button")</span>
                                                </td>
                                            </tr>@else

                                            <tr> @if(!Auth::check())
                                                    @php $userdata=App\Http\Controllers\Usercheck::Userdata($item->id);// print_r( $userdata); @endphp
                                                    <td class="image"><a href="{{url("/profile/".$item->id)}}"><img
                                                                src="{{$userdata["photo"]}}"
                                                                alt=""></a></td>
                                                    <td class="product " style="vertical-align: middle"><a
                                                            href="{{url("/profile/".$item->id)}}"><strong
                                                                style=" ">{{$item->name." ".$item->surname}}</strong></a>
                                                    </td>
                                            </tr>@endif
                                        @endif

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- END TABLE RESULT -->

                                <!-- BEGIN PAGINATION -->
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                                <!-- END PAGINATION -->
                            </div>
                            <!-- END RESULT -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SEARCH RESULT -->
        </div>
    </div> <div wire:loading>
        Processing Payment...
    </div>
    {{$test}}</div>

<style>
    .exmp-wrp {

        position: relative;

    }

    .btn-wrp {
        border: 1px solid #dadada;
        display: inline-block;
        width: 100%;
        position: relative;
        z-index: 4;
    }

    .btn-clck {
        border: none;
        background: transparent;
        width: 100%;
        padding: 10px;
    }

    .btn-clck::-webkit-calendar-picker-indicator {
        right: -10px;
        position: absolute;
        width: 78px;
        height: 40px;
        color: rgba(204, 204, 204, 0);
        opacity: 0
    }

    .btn-clck::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    .btn-clck::-webkit-clear-button {
        margin-right: 75px;
    }

    .btndate {
        height: 100%;


        padding: 13px;
        position: absolute;
        right: 0;
        top: 0;
    } </style>

@livewireStyles

@livewireScripts


