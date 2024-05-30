<nav class="navbar navbar-expand-md" style="background-color: #F8F3ED">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}" style="font-size: 25px; font-weight: bold; color:black;">
            {{ config('Velook', 'Velook') }}
        </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="row just" style="align-content: center">
            <a class="nav-link  @yield('active-home')" href="/home" style="font-size: 15px; font-weight: bold; color:black; margin-right: 5px;">Home</a>
            <a class="nav-link  @yield('active-store')" href="/store" style="font-size: 15px; font-weight: bold; color:black; margin-right: 5px;">Store</a>
            <a class="nav-link  @yield('active-library')" href="/library" style="font-size: 15px; font-weight: bold; color:black;">Library</a>
        </div>

        

        <div class="row">
            <div class="navbar-brand">
                <div class="image" >
                  <img src="images/profile.png" class="img-circle" alt="User Image" style="width: 30px; height: 30px;">
                </div>
              </div>

              <li class="nav dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 15px; font-weight: bold; color:black; margin-left: -20px;">
                    {{ Auth::user()->name }}
                </a>
    
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a  class="dropdown-item" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" >
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </div>

        
    </div>

</nav>
