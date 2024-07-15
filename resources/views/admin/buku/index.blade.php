@extends('component.main')

@section('content')
<div class="container-fluid">
    <h2 class="text-center" style="color: #543310">Data Buku</h2>
    <main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- FORM PENCARIAN -->
            <div class="pb-3">
                <form class="d-flex" action="{{ route('bukus.search') }}" method="get">
                    <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Cari produk" aria-label="Search">
                    <button class="btn btn-secondary" type="submit" style="background-color: #74512D">Cari Buku</button>
                </form>
            </div>

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
                <a href='{{ route('bukus.create') }}' class="btn btn-primary" style="background-color: #74512D"> + Tambah Data Buku </a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th class="col-md-1">No</th>
                        <th class="col-md-2">Judul</th>
                        <th class="col-md-1">ISBN</th>
                        <th class="col-md-2">Penulis</th>
                        <th class="col-md-2">Penerbit</th>
                        <th class="col-md-1">Tahun Terbit</th>
                        <th class="col-md-1">Jumlah Salinan</th>
                        <th class="col-md-1">Status</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($bukus as $buku)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->isbn }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>{{ $buku->jumlah_salinan }}</td>
                        <td>{{ $buku->status }}</td>
                        <td>
                            <a href="{{ route('bukus.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- AKHIR DATA -->
    </main>
</div>
@endsection
