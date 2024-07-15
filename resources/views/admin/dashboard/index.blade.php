@extends('component.main')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-12">
            @if(Auth::check())
                <h2 class="text-center" class="col-12" style="color: #543310">
                Welcome to BeLibrary, {{ Auth::user()->username }}!
            </h2>
            @else
                <h2>Selamat datang, tamu!</h2>
            @endif
        </div>
        <h4>BeLibrary's recap</h4>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="background-color: rgba(81, 143, 201, 0.151)">Total Admin</div>
                <div class="card-body">{{ $jumlahAdmin }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="background-color: rgba(81, 143, 201, 0.151)">Total Pengunjung</div>
                <div class="card-body">{{ $jumlahPengunjung }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="background-color: rgba(81, 143, 201, 0.151)">Total Buku</div>
                <div class="card-body">{{ $jumlahTotalBuku }}</div>
            </div>
        </div>
    </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="background-color: rgba(81, 143, 201, 0.151)">Total Buku Terpinjam</div>
                <div class="card-body">{{ $jumlahBukuTerpinjam }}</div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
