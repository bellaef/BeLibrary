<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'penulis', 'penerbit', 'tahun_terbit', 'isbn', 'jumlah_salinan', 'status'
    ];

    public function detailPeminjaman()
    {
        return $this->hasMany(Peminjaman_buku::class);
    }

    public function getStatusDescriptionAttribute()
    {
        switch ($this->status) {
            case 0:
                return 'tersedia';
            case 1:
                return 'dipinjam';
            case 2:
                return 'rusak';
            default:
                return 'unknown';
        }
    }
}
