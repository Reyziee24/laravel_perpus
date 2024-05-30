<?php

namespace App\Http\Livewire\Peminjam;

use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Livewire\Component;

class Keranjang extends Component
{
    public $tanggal_pinjam;
        public $belum_dipinjam, $sedang_dipinjam, $selesai_dipinjam, $search;



    protected $rules = [
        'tanggal_pinjam' => 'required|date|after_or_equal:today',
    ];

    public function belumDipinjam()
    {
        $this->format();
        $this->belum_dipinjam = true;
    }

    public function sedangDipinjam()
    {
        $this->format();
        $this->sedang_dipinjam = true;
    }

    public function selesaiDipinjam()
    {
        $this->format();
        $this->selesai_dipinjam = true;
    }

    public function hapus(Peminjaman $peminjaman, DetailPeminjaman $detail_peminjaman)
    {
        if ($peminjaman->detail_peminjaman->count() == 1) {
            $detail_peminjaman->delete();
            $peminjaman->delete();
            session()->flash('sukses', 'Data berhasil dihapus');
            redirect('/');
        } else {
            $detail_peminjaman->delete();
            session()->flash('sukses', 'Data berhasil dihapus');
            $this->emit('kurangiKeranjang');
        }  
    }

    public function hapusMasal()
    {
        $keranjang = Peminjaman::latest()->where('peminjam_id', auth()->user()->id)->where('status', '!=', 3)->first();
        foreach ($keranjang->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->delete();
        }
        $keranjang->delete();
        session()->flash('sukses', 'Data berhasil dihapus');
        redirect('/');
    }

    public function pinjam(Peminjaman $keranjang)
    {
        $this->validate();

        $keranjang->update([
            'status' => 1,
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_kembali' => Carbon::create($this->tanggal_pinjam)->addDays(10)
        ]);

        session()->flash('sukses', 'Buku berhasil dipinjam');
    }

    public function kembali(Peminjaman $peminjaman)
    {
        $data = [
            'status' => 3,
            'petugas_kembali' => auth()->user()->id,
            'tanggal_pengembalian' => today(),
            'denda' => 0
        ];

        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->buku->update([
                'stok' => $detail_peminjaman->buku->stok + 1
            ]);
        }
        
        $peminjaman->update($data);
        session()->flash('sukses', 'Buku berhasil dikembalikan.');
    }

    public function render()
    {

        // if ($this->search) {
        //     if ($this->belum_dipinjam) {
        //         $keranjang = Peminjaman::latest()->where('status', 1)->paginate(5);
        //     } elseif ($this->sedang_dipinjam) {
        //         $keranjang = Peminjaman::latest()->where('status', 2)->paginate(5);
        //     } elseif ($this->selesai_dipinjam) {
        //         $keranjang = Peminjaman::latest()->where('status', 3)->paginate(5);
        //     } else {
        //         $keranjang = Peminjaman::latest()->where('status', '!=', 0)->paginate(5);
        //     }
        // }        

        $keranjang = Peminjaman::latest()->where('peminjam_id', auth()->user()->id)->where('status', '!=', 3)->first();
        if (!$keranjang) {
            redirect('/');
        }
        return view('livewire.peminjam.keranjang', [
            'keranjang' => $keranjang,
        ]);

        
    }

    public function format()
    {
        $this->sedang_dipinjam = false;
        $this->belum_dipinjam = false;
        $this->selesai_dipinjam = false;
    }

}
