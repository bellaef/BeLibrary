<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\pembelian_produk;
use App\Models\Pembelian;
use App\Models\Peminjaman_buku;
use App\Models\User;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller

{
    public function showAdmin(): View{
        return view('admin.dashboard.index');
    }

    public function index()
    {
        $jumlahAdmin = User::where('role', 'admin')->count();
        $jumlahPengunjung = User::where('role', 'pengunjung')->count();
        $jumlahTotalBuku = Buku::count();
        $jumlahBukuTerpinjam = Buku::where('status', 1)->count(); // Menghitung jumlah baris dengan status 1

        return view('admin.dashboard.index', compact(
            'jumlahAdmin',
            'jumlahPengunjung',
            'jumlahTotalBuku',
            'jumlahBukuTerpinjam',
        ));
    }
}
