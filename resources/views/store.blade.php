@extends('layouts.app')

@section('content')

{{-- <livewire:peminjam.buku></livewire:peminjam.buku> --}}

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background-color: #F8F3ED; height: 200vh;">
            <div class="col-md-10" style="top: 2%; left: 8%; position: absolute;">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="banner">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="banner">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-11" style="top: 41%; left: 5%; position: absolute;">
                <hr>
            </div>
            
            <div class="row" style="margin-top: 2%; margin-left: 1%;">
                @include('store.mostpopular')
            </div>
        </div>
    </div>
  
</div>
@endsection