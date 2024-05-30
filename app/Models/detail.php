<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = ['judul', 'stok', 'sampul', 'slug', 'penulis', 'sinopsis', 'kategori_id', 'rak_id', 'penerbit_id', 'sinopsis_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function sinopsis()
    {
        return $this->belongsTo(sinopsis::class);
    }

    public function buku()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }



    // mutator
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = ucfirst($value);
    }

    public function setSinopsisAttribute($value)
    {
        $this->attributes['sinopsis'] = ucfirst($value);
    }
   
    public function setPenulisAttribute($value)
    {
        $this->attributes['penulis'] = ucfirst($value);
    }
}

