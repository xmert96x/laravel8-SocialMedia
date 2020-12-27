

{{ $error ?? ''}}  
<table border="2"><tr><th>Ad</th><th>Soyad</th><th>Email</th></tr>
@foreach ($members as $user)
@php 
$x=rand(20, 30);
$y=rand(0,255);
$z=rand(0,255);
$t=rand(0,255);
@endphp
<tr><td> <p style="color:rgb({{$y}},{{$z}},{{$t}}); "> {{ $user->NAME }}</p></td>
@php 
$x=rand(20, 30);
$y=rand(0,255);
$z=rand(0,255);
$t=rand(0,255);
@endphp
<td> <p style="color:rgb({{$y}},{{$z}},{{$t}}); "> {{ $user->SURNAME }}</p></td> 
@php 
$x=rand(20, 30);
$y=rand(0,255);
$z=rand(0,255);
$t=rand(0,255);
@endphp
<td> <p style="color:rgb({{$y}},{{$z}},{{$t}}); "> {{ $user->EMAİL }}</p></td></tr>
@endforeach</table>
@if (count($members) > 0)
    {{count($members)}}
@endif