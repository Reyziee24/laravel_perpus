@extends('layouts.app')

@section('content')

{{-- <livewire:peminjam.buku></livewire:peminjam.buku> --}}

<div class="container-fluid">
    <div class="row">
      <div class="col-md-12" style="background-color: #F8F3ED; height: 90vh;">
        

        <div class="col-md-3" style="top: 20%; left: 10%; position: absolute;">
            <div class="text-content">
                <p style=" font-size: 70px; font-family: 'Times New Roman', Times, serif;">{{ __('New & Trending') }}</p>
                <p style="top: 90%; position: absolute; font-size: 16px; color: grey">{{ __('Explore new books from many authors from around the world!') }}</p>
            </div>
        </div>

        <div class="col-md-3" style="top: 70%; left: 10%; position: absolute;">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="input-group-text">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                <input wire:model="search" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search for books, authors, or genres.">
                
            </div>
        </div>

        <div class="text-content">
          <p style="font-weight:bold; font-size: 17px; font-family: 'Times New Roman', Times, serif; transform: rotate(270deg); transform-origin left top; top: 30%; left: 32%; position: absolute; ">{{ __('New & Trending') }}</p>
        </div>

        <div class="col-lg-1.5" style="top: 25%; left: 38%; position: absolute;">
          <div class="card mb-4 shadow" style="cursor: pointer">
            <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="100" height="200">
          </div>
        </div>
        <div class="col-lg-2" style="top: 17%; left: 48%; position: absolute;">
          <div class="card shadow" style="cursor: pointer">
            <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="200" height="300">
          </div>
        </div>
        <div class="col-lg-1.5" style="top: 25%; left: 64.5%; position: absolute;">
          <div class="card mb-4 shadow" style="cursor: pointer">
            <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="100" height="200">
          </div>
        </div>
        <div class="text-content">
          <p style="font-weight:bold; font-size: 17px; font-family: 'Times New Roman', Times, serif; transform: rotate(270deg); transform-origin left top; top: 28%; left: 74%; position: absolute; ">{{ __('Author of the week') }}</p>
        </div>
        <div class="col-lg-2" style="top: 17%; left: 80%; position: absolute;">
          <div class="card shadow" style="cursor: pointer">
            <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="200" height="300">
          </div>
        </div>



      </div>
      <div class="col-md-12" style="background-color: #fef8f1; height: 100vh;">
        <div class="col-md-6" style="margin-top: 5%; margin-left: 41%;">
          <div class="text-content">
              <p style=" font-size: 40px; font-family: 'Times New Roman', Times, serif;">{{ __('Most Popular') }}</p>
          </div>
        </div>

        {{-- Container --}}
        <div class="col-md-2" style="top: 25%; left: 10%; position: absolute;">
          <div style="border: 1px solid transparent; border-radius: 5%; padding: 110px; margin: 10px; background-color: #e8e8e8;">
            <div class="col-lg-1.5" style="top: 20%; left: 40%; position: absolute;">
              <div class="card mb-4 shadow" style="cursor: pointer">
                <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="100" height="140">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <p style=" font-size: 20px; font-family: 'Times New Roman', Times, serif; margin-left:13.5%; margin-top:21%;">{{ __('Pulang') }}</p>
          <p style=" font-size: 15px; margin-left:4.5%; margin-top:21.5%; color: rgba(128, 128, 128, 0.854)">{{ __('TERELIYE') }}</p>
        </div>
        <div class="col-md-2">
          <div class="button" style=" border: 1px solid transparent;  border-radius: 10px; width:100%; height: 100%; margin-left: 80%; margin-right: 10%; background-color: #DAAA63; display: flex; justify-content: center; align-items: center;">
            <a class="text" href="#" style="font-size: 15px; font-weight: 500; color:white;">{{ __('View Book') }}</a>
          </div>
        </div>
        {{-- Container end  --}}

        {{-- container 1 --}}
        <div class="col-md-2" style="top: 25%; left: 30%; position: absolute;">
          <div style="border: 1px solid transparent; border-radius: 5%; padding: 110px; margin: 10px; background-color: #e8e8e8;">
            <div class="col-lg-1.5" style="top: 20%; left: 40%; position: absolute;">
              <div class="card mb-4 shadow" style="cursor: pointer">
                <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="100" height="140">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <p style=" font-size: 20px; font-family: 'Times New Roman', Times, serif; top: 61%; left: 34%; position: absolute;">{{ __('Pulang') }}</p>
          <p style=" font-size: 15px; top: 62%; left: 42%; position: absolute; color: rgba(128, 128, 128, 0.854)">{{ __('TERELIYE') }}</p>
        </div>
        <div class="col-md-2" style="top: 68.2%; left: 32.5%; position: absolute;">
          <div class="button" style=" border: 1px solid transparent;  border-radius: 10px; width:100%; height: 100%; margin-left: 0%; margin-right: 0%; background-color: #DAAA63; display: flex; justify-content: center; align-items: center;">
            <a class="text" href="#" style="font-size: 15px; font-weight: 500; color:white;">{{ __('View Book') }}</a>
          </div>
        </div>
        {{-- container 1 end --}}

        {{-- container 2 --}}
        <div class="col-md-2" style="top: 25%; left: 50%; position: absolute;">
          <div style="border: 1px solid transparent; border-radius: 5%; padding: 110px; margin: 10px; background-color: #e8e8e8;">
            <div class="col-lg-1.5" style="top: 20%; left: 40%; position: absolute;">
              <div class="card mb-4 shadow" style="cursor: pointer">
                <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="100" height="140">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <p style=" font-size: 20px; font-family: 'Times New Roman', Times, serif; top: 61.5%; left: 54%; position: absolute;">{{ __('Pulang') }}</p>
          <p style=" font-size: 15px; top: 62%; left: 62%; position: absolute; color: rgba(128, 128, 128, 0.854)">{{ __('TERELIYE') }}</p>
        </div>
        <div class="col-md-2" style="top: 68.2%; left: 52.5%; position: absolute;">
          <div class="button" style=" border: 1px solid transparent;  border-radius: 10px; width:100%; height: 100%; margin-left: 0%; margin-right: 0%; background-color: #DAAA63; display: flex; justify-content: center; align-items: center;">
            <a class="text" href="#" style="font-size: 15px; font-weight: 500; color:white;">{{ __('View Book') }}</a>
          </div>
        </div>
        {{-- Container 2 end --}}

        {{-- Container 3 --}}
        <div class="col-md-2" style="top: 25%; left: 70%; position: absolute;">
          <div style="border: 1px solid transparent; border-radius: 5%; padding: 110px; margin: 10px; background-color: #e8e8e8;">
            <div class="col-lg-1.5" style="top: 20%; left: 40%; position: absolute;">
              <div class="card mb-4 shadow" style="cursor: pointer">
                <img src="{{ Asset('images/IMG-20240426-WA0018.jpg') }}" class="card-img-top" alt="" width="100" height="140">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <p style=" font-size: 20px; font-family: 'Times New Roman', Times, serif; top: 61.5%; left: 74%; position: absolute;">{{ __('Pulang') }}</p>
          <p style=" font-size: 15px; top: 62%; left: 82%; position: absolute; color: rgba(128, 128, 128, 0.854)">{{ __('TERELIYE') }}</p>
        </div>
        <div class="col-md-2" style="top: 68.2%; left: 72.5%; position: absolute;">
          <div class="button" style=" border: 1px solid transparent;  border-radius: 10px; width:100%; height: 100%; margin-left: 0%; margin-right: 0%; background-color: #DAAA63; display: flex; justify-content: center; align-items: center;">
            <a class="text" href="#" style="font-size: 15px; font-weight: 500; color:white;">{{ __('View Book') }}</a>
          </div>
        </div>
        {{-- container 3 end --}}

        <div class="row">
          <div class="text-content">
            <p style=" font-size: 20px; font-family: 'Times New Roman', Times, serif; top: 85%; left: 12%; position: absolute;">{{ __('See More') }}</p>
          </div>
          <a href="/store" style="position: absolute; top: 83%; left: 85%;">
            <i class='bx bx-right-arrow-alt bx-lg bx-tada' style='color:#daaa63;'></i>
          </a>        
        </div>


      </div>
      
    </div>
  </div>
</div>
@endsection