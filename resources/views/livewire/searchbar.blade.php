<div>
    <style>
        .formcon {
            height: 45px;
            padding: 10px;
            font-size: 16px;
            box-shadow: none;
            border-radius: 0;
            position: relative
        }
    </style>
    <form action="{{url("search/".$search."/0")}}">

        <div class="input-group">
            <input
                autocomplete="off" wire:model="search" type="text" class="form-control formcon" placeholder="Arama">
            <span class="input-group-btn">
              <button
                  wire:loading.attr="disabled" class="btn  btn-success   btn-lg" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        Search
                </button>
            </span>
        </div>
    </form>

    <div
        style="  overflow: auto;   max-height:355px;   @if(!Auth::check())max-width:calc(100% - 488px); @endif @if( Auth::check())max-width:calc(100% - 409px); @endif"
        id="myInputautocomplete-list" class="autocomplete-items">

        @if(strlen($search)>=2)
            @foreach($result as $item)
                <a href="{{url("profile/".$item->id)}}" target="_self">
                    <div> @php $userdata=App\Http\Controllers\Usercheck::Userdata($item->id);// print_r( $userdata); @endphp


                        <img src="{{$userdata["photo"]}}" alt="..."
                             class="img-post2"
                             style="padding-right: 5px;"> {{trim($item->name)." ".trim($item->surname)}}


                    </div>
                </a>

            @endforeach
        @endif
    </div>

</div>

@livewireStyles


<style>


    @media screen and (max-width: 767px) {

        .autocomplete-items {
            margin-left: 7px;
            min-width: 100%;
        }
    }

    @media screen and (min-width: 767px) {

        @if(!Auth::check())    .autocomplete-items {
            margin-left: 70px;

        }

        @else    .autocomplete-items {
            margin-left: 110px;


        }

    @endif










    }

    /*the container must be positioned relative:*/
    .autocomplete {
        position: relative;
        display: inline-block;
    }


    .autocomplete-items {
        position: absolute;
        top: 45px;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/

        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        border-bottom: 1px solid #d4d4d4;

    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }

</style>
@livewireScripts
<script>

    document.addEventListener("click", function () {
        var x = document.activeElement.className;
        y = document.getElementById("myInputautocomplete-list");
        if (x === "form-control formcon") {
            y.style.visibility = "visible";
            y.scrollTo(0, 0);
        } else {
            y.style.visibility = "hidden";
        }
    });</script>

