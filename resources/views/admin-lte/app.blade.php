
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin-lte/header')
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{-- @include('admin-lte/preloader') --}}

    @include('admin-lte/navbar')

    @include('admin-lte/sidebar')

  <div class="content-wrapper" style="background-color: #F8F3ED">
       

    <section class="content" style="background-color: white; border: 1px solid transparent; border-radius: 50px;">
      <div class="container-fluid">
        <div class="card-body">
          @yield('content')
          {{-- <div class="row">
            <div class="col-md-4">
              <img src="/storage/{{$buku->sampul}}" alt="{{$buku->judul}}" width="300" height="400">
          </div>
          </div> --}}
          {{-- <livewire:peminjam.buku></livewire:peminjam.buku> --}}
        </div>
      </div>
    </section>
   
  </div>
    @include('admin-lte/footer')

    <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

@include('admin-lte/javascript')
@yield('script')
@livewireScripts
@yield('chart-script')
</body>
</html>
