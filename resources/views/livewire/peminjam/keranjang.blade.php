<div class="container">
    @include('admin-lte/flash')

    <div class="row">
        <div class="col-md-12 mb-4">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input wire:model="tanggal_pinjam" type="date" class="form-control" id="tanggal_pinjam">
            @error('tanggal_pinjam') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>

    <div class="btn-group mb-3">
        <button wire:click="format" class="btn btn-sm bg-teal mr-2">Semua</button>
        <button wire:click="belumDipinjam" class="btn btn-sm bg-indigo mr-2">Belum Dipinjam</button>
        <button wire:click="sedangDipinjam" class="btn btn-sm bg-olive mr-2">Sedang Dipinjam</button>
        <button wire:click="selesaiDipinjam" class="btn btn-sm bg-fuchsia mr-2">Selesai Dipinjam</button>
    </div>

    <div class="row">
        <div class="col-md-12 mb-2">
            @if ($keranjang->tanggal_pinjam)
                <strong>Tanggal Pinjam: {{$keranjang->tanggal_pinjam}}</strong>
            @else
                <button wire:click="pinjam({{$keranjang->id}})" class="btn btn-sm btn-success">Pinjam</button>
            @endif
            <strong class="float-right">Kode Pinjam : {{$keranjang->kode_pinjam}}</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
             <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                    @if (!$selesai_dipinjam)
                        <th width="15%">Aksi</th>
                   @endif

                </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang->detail_peminjaman as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->buku->judul}}</td>
                            <td>{{$item->buku->penulis}}</td>
                            <td>
                                <button wire:click="hapus({{$keranjang->id}}, {{$item->id}})" class="btn btn-sm btn-danger">Hapus</button>
                                <button wire:click="pinjam({{$keranjang->id}})" class="btn btn-success">Pinjam</button>
                                @if ($keranjang->id)
                                    @if ($item->status == 0)
                                        <span class="badge bg-indigo">Belum Dipinjam</span>
                                    @elseif ($item->status == 1)
                                        <span class="badge bg-olive">Sedang Dipinjam</span>
                                    @elseif ($item->status == 2)
                                        <span class="badge bg-fuchsia">Selesai Dipinjam</span>
                                    @endif
                                @endif
                            </td>
                            
                        </tr>
                    @endforeach
                                    
                </tbody>
            </table>
            <button wire:click="hapusMasal" class="btn btn-sm btn-danger">Hapus Masal</button>
      
        </div>
    </div>
</div>