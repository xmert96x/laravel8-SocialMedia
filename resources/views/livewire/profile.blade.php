
<div>



    {!! $all!!}
    <button onclick="myFunction()">deneme</button>
</div>




    <style>
        .mert {
            border: 1px solid black;
            width: 200px;
            height: 100px;
            overflow: scroll;
        }
    </style>


<p>Try the scrollbar in div.</p>

<div  class="mert" onscroll="myFunction()">In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
    <br><br>
    'Whenever you feel like criticizing anyone,' he told me, just remember that all the people in this world haven't had the advantages that you've had.'</div>








@livewireStyles

<script src="{{ mix('js/app.js') }}"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<script>


    function myFunction() {
        if (@this.x <= @this.count) {
        @this.submit();


        }
    }
</script>
@livewireScripts

