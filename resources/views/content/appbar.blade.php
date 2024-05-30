<nav class="navbar navbar-expand-md" style="background-color: #F8F3ED">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 25px; font-weight: bold; color:black;">
            {{ config('Velook', 'Velook') }}
        </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav" style="margin-left: 90%">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item" style=" border: 1px solid transparent;  border-radius: 10px; width:100%; height: 5%; margin-left: -50%; margin-right: 10%; background-color: #DAAA63;">
                            <a class="nav-link" href="{{ route('login') }}" style="font-size: 17px; font-weight: 500; color:white; text-align: center;">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item" style="border: 1px solid #DAAA63;  border-radius: 10px; width:100%; height: 5%; margin-right: 10%">
                            <a class="nav-link" href="{{ route('register') }}" style="font-size: 16px; font-weight: 500; color: #DAAA63; text-align: center;">{{ __('Register') }}</a>
                        </li>
                    @endif
                    
                @endguest
            </ul>
        </div>
    </div>
</nav>
