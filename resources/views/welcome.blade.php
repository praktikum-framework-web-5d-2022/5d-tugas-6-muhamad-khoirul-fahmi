@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4 ">
            <div class="card text-center" >
                <div class="card-header">Kategori</div>
                <div class="card-body">
                    <p class="card-text">Pada kolom ini, pengguna dapat : </p>
                    <p class="card-text">Menambahkan, Menggubah, Mengapus dan Menampilkan Data</p>
                    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Masuk ke Kategori</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card text-center">
                <div class="card-header">Produk</div>
                <div class="card-body">
                    <p class="card-text">Pada kolom ini, pengguna dapat : </p>
                    <p class="card-text">Menambahkan, Menggubah, Mengapus dan Menampilkan Data</p>
                    <a href="{{ route('produk.index') }}" class="btn btn-primary">Masuk ke Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection