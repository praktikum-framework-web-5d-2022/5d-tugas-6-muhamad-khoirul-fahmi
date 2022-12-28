@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card border-light p-4">
                <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="prokategoriid" class="form-label">Kategori</label>
                        <select class="form-select" id="prokategoriid" aria-label="Default select example"
                            name="kategori_id" value="{{ $produk->kategori_id }}">
                            @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{old('kategori_id') == $kategori->id ? "selected" : "" }}> {{ $kategori->nama }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Produk Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" id="harga" name="harga"
                            value="{{ $produk->harga }}">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Edit Produk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection