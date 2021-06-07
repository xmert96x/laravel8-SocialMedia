<div>
    <button wire:click="inc">{{$like}}</button>
    @if ($photos)
        Photo Preview:
        @php $x=0; @endphp
        @foreach($photos as $item)   <img id="{{$x}}"
                                         @php   $x++; @endphp style="max-width: 100px;"
                                         src="@php  try {echo  $item->temporaryUrl();} catch (Exception $e) {  }finally {
}  @endphp"> @endforeach
    @endif

    <form wire:submit.prevent="save">
        <input type="file" wire:model="photos" multiple>

        @error('photos.*') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Photo</button>
    </form>
</div>

@livewireStyles




@livewireScripts
<script>
    window.addEventListener('name-updated', event => {


        deneme();


    })


    function deneme() {x=100;
        var i = 0;
        for (i = 0; document.getElementById(i) != null; i++) {

            var item = document.getElementById(i);
            const img = new Image();
            img.onload = function () {
                console.log("image:" + this.width + 'x' + this.height);
              /*  if (this.width > this.height) {
                w=100;  h=this.height*100/this.width;  } else {      h=100;
                w=this.width*100/this.height;  }
          */
                if(this.width>100)
                { w=x;  h=this.height*x/this.width; }
                console.log(w+" "+h) }
            img.src = item.src;
        }
    }

</script>
