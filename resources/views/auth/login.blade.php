@extends('layouts.login')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-8" style="background-color: #F8F3ED; height: 100vh;">
        
        <img src="{{ asset('images/logo.png') }}" alt="Deskripsi gambar" style="width: 25%; top: 30%; left: 35%; position: absolute;">

        <div class="text-content">
            <p style="top: 60%; left: 35%; position: absolute; font-size: 16px;">{{ __('One of your best online library') }}</p>
            <p style="top: 63%; left: 37%; position: absolute; font-size: 16px;">{{ __('and book reading website') }}</p>
        </div>
        
      </div>
      <div class="col-md-4" style="height: 100vh; background-color: #FFFFFF;">
        
          
          <div class="container">
                <h1 class="header" style="top: 10%; left: 37%; position: absolute; font-weight: bold;">{{ __('Velook') }}</h1>
                <h3 class="Welcome" style="top: 30%; left: 25%; position: absolute;">{{ __('Welcome to Velook!') }}</h3>


                <div class="body">
                    @include('admin-lte/flash')
                    
                    <form method="POST" action="{{ route('login') }}"  style="top: 40%; left: 15%; position: absolute;">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" style="width: 325px;" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <div class="col-md-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                
                            </div>
                            <div class="col-md-7" style="margin-top: -2%;">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" class="btn" style="width: 200px; margin-left: 175%; background-color: #DAAA63;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <div class="col-md-7">
                                <p class="Welcome" style="margin-top: 37%; margin-left: 30%;">{{ __('New to Velook?') }}</p>
                            </div>
                            <div class="col-md-5">
                                @if (Route::has('register'))
                                    <li class="nav">
                                        <a class="nav-link" href="{{ route('register') }}" style="margin-top: 50%; margin-left: -50%;">{{ __('Register Now!') }}</a>
                                    </li>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
      </div>
    </div>
  </div>
</div>
@endsection
