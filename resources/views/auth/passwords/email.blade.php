@extends('layouts.login')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
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
                <h5 class="Welcome" style="top: 18%; left: 32%; position: absolute;">{{ __('Welcome to Velook!') }}</h5>
                <h5 class="Welcome" style="top: 21%; left: 27%; position: absolute;">{{ __('Create your account now!') }}</h5>

                <div class="body">
                    
                    
                    <form method="POST" action="{{ route('password.email') }}"  style="top: 45%; left: 15%; position: absolute;">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 325px;" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" class="btn" style="width: 200px; margin-left: 195%; margin-top: 195%; background-color: #DAAA63;">
                                    {{ __('Submit') }}
                                </button>
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
