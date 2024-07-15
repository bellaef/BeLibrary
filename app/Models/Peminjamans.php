<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjamans extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailPeminjaman()
    {
        return $this->hasMany(Peminjaman_buku::class);
    }
}
