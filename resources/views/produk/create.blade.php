@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card border-light p-4">
                <form action="{{ route('produk.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kategoriid" class="form-label">Kategori</label>
                        <select class="form-select" id="kategoriid" aria-label="Default select example"
                            name="kategori_id">
                            <option selected disabled>Pilih Kategori</option>
                            @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Buat Produk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection