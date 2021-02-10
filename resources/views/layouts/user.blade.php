<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile with tabs like facebook passsge - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/profile')}}/profile_page.css">
    <link rel="stylesheet" href="{{asset('assets/profile')}}/menu.css">


<style type="text/css">

    </style>
</head>
<body onresize="myFunction()">
@include("user.sidebar._header")
@include('user._header')
@section('content')
@show
@include("user._footer")
@include("user.sidebar._footer")

<script type="text/javascript">


    $(function () {
        $(".btn-toggle-menu").click(function () {
            $("#wrapper").toggleClass("toggled");
        });
    })
</script>


<script>

    var elem, style;
    elem = document.querySelector('#wrapper');
    style = getComputedStyle(elem);

    var i = 0;

    function myFunction() {

        var w = window.outerWidth;
        var h = window.outerHeight;
        if (w < 1500 && elem.classList.contains("toggled") && i == 0) {
            elem.classList.remove("toggled");
            i = 1;
        }


        if (w > 1500 && i == 1) {
            i = 0;
        }
    }


</script><script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<body>











