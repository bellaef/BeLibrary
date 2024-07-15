@extends('component.main')

@section('content')
<div class="container-fluid">
<body class="bg-light">
    <h2 class="text-center" style="font-weight: bold; color:#543310">Tambah Buku</h2>
    <main class="container">
       <!-- START FORM -->
       <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="my-3 p-4 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="Judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" id="judul">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" id="penulis">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerbit" id="penerbit">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah_salinan" class="col-sm-2 col-form-label">Jumlah Salinan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah_salinan" id="jumlah_salinan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status" id="status">
                        <option value="0">Tersedia</option>
                        <option value="1">Dipinjam</option>
                        <option value="2">Rusak</option>
                        <!-- Tambahkan pilihan status lain sesuai kebutuhan -->
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit" style="color:#543310">Tambahkan</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
    </main>
</body>
</div>
@endsection
