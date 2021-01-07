

@if (isset(Auth::user()->name))
{{Auth::user()->name}}
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
