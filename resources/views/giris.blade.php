

@if (isset(Auth::user()->name))
{{Auth::user()}}
@else
giris yapin
@endif

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-jet-responsive-nav-link href="{{ route('logout')}}"
                               onclick="event.preventDefault();
                                    this.closest('form').submit();">
        {{ __('Logouts') }}

    </x-jet-responsive-nav-link>
</form>


@if (isset(Auth::user()->name))
  echo"<img src=" {{Auth::user()->profile_photo_url}}" alt="{{ Auth::user()->name}}" class="rounded-full h-20 w-20 object-cover">"
@else
    echo '<i class="glyphicon glyphicon-user"></i>'
@endif
