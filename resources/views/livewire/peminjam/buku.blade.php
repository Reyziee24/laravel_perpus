<div class="container">
    @include('admin-lte/flash')

    <div class="row">
        <div class="col-md-8 mb-3" style="font-size: 45px; font-family: 'Times New Roman', Times, serif;">
          <h1>Store</h1>
        </div>
        @if (!$detail_buku)
            <div class="col-md-4">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group mb-2">
                  <input wire:model="search" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari Buku">
                  <div class="input-group-prepend">
                    <button class="input-group-text">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
            </div>
        @endif
        <div class="col-md-8 mb-3">
          <p style=" font-size: 30px; font-family: 'Times New Roman', Times, serif;">{{ __('All Books') }}</p>
        </div>
        
    </div>

    @if ($detail_buku)
        
        <div class="row">
            <div class="col-md-4">
                <img src="/storage/{{$buku->sampul}}" alt="{{$buku->judul}}" width="300" height="400">
            </div>
            <div class="col-md-8">
                 <table class="table">
                  <tbody>
                    <tr>
                      <th>Judul</th>
                      <td>:</td>
                      <td>{{$buku->judul}}</td>
                    </tr>
                    <tr>
                      <th>Penulis</th>
                      <td>:</td>
                      <td>{{$buku->penulis}}</td>
                    </tr>
                    <tr>
                      <th>Sinopsis</th>
                      <td>:</td>
                      <td>{{$buku->sinopsis}}</td>
                    </tr>
                    <tr>
                      <th>Kategori</th>
                      <td>:</td>
                      <td>{{$buku->kategori->nama}}</td>
                    </tr>
                    <tr>
                      <th>Penerbit</th>
                      <td>:</td>
                      <td>{{$buku->penerbit->nama}}</td>
                    </tr>
                    <tr>
                      <th>Stok</th>
                      <td>:</td>
                      <td>{{$buku->stok}}</td>
                    </tr>
                  </tbody>
                </table>

                <button wire:click="keranjang({{$buku->id}})" class="btn btn-success">Pinjam</button>
            </div>
        </div>

    @else
    
        @if ($buku->isNotEmpty())
    
            <div class="row" style="display: flex; flex-wrap: nowrap; overflow-x: auto; ">
                @foreach ($buku as $item)
                    <div class="col-lg-2 col-md-3 col-sm-5" style="margin-right: 12%;">
                        <div wire:click="detailBuku({{$item->id}})" class="" style="cursor: pointer; display: flex;">
                          <img src="/storage/{{$item->sampul}}" class="card-img shadow" alt="" width="100" height="200">
                              <div class="col-md-12">
                                <p class="title" style="margin-bottom: -1%; font-size:95%; font-family:'Times New Roman', Times, serif; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;"><strong>{{$item->judul}}</strong></p>
                                <p class="text" style="font-size:80%; font-family:'Times New Roman', Times, serif; margin-bottom:-10%">{{$item->penulis}}</p>
                                <div style="margin-bottom: -10%">
                                  <hr>
                                </div>
                                <div class="sinopsis">
                                  <p class="text" style="font-size:80%; font-family:'Times New Roman', Times, serif; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">{{$item->sinopsis}}</p>
                                </div>
                                <div class="kategori" style="border: 1px solid #DAAA63; width: 40%; height: 10%; border-radius: 10%; margin-top: -10%;">
                                  <p class="title" style="font-size:75%; font-family:'Times New Roman', Times, serif; text-align:center;">{{$item->kategori->nama}}</p>
                                </div>
                                <div class="kategori" style="border: 1px solid #DAAA63; width: 80%; height: 15%; border-radius: 5%; background-color: #DAAA63; margin-top:30%;">
                                  <p class="title" style="font-size:100%; font-family:'Times New Roman', Times, serif; text-align:center; margin-top:2%"><strong>View Book</strong></p> 
                                </div>
                              </div>
                            </div>
                            
                          <div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                {{$buku->links()}}
            </div>

        @else

            <div class="alert alert-danger">
                Data tidak ada
            </div>
        @endif

    @endif
    
</div>
     
