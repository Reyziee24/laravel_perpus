@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background-color: #F8F3ED; height: 200vh;">
            <div class="row" style="margin-top: 2%; margin-left: 1%;">
                @include('store.riwayatPinjam')
            </div>
        </div>
    </div>
  
</div>
@endsection