@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card border-light p-4">
                <a href="{{ route('produk.create') }}" class="btn btn-outline-primary p-3 mb-4">
                    <h5 class="mb-0">Buat Produk</h5>
                </a>

                @if ($message = Session::get('success'))
                <div class="alert alert-success mb-4">
                    <p class="mb-0">{{ $message }}</p>
                </div>
                @endif

                <div class="bdr table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produks as $produk)
                            <tr>
                                <th scope="row" class="text-center">{{ ++$i }}</th>
                                <td>{{ $produk->kategoris->nama ?? 'Tidak ada ketegori' }}</td>
                                <td>{{ $produk->nama }}</td>
                                <td>{{ $produk->harga }}</td>
                                <td class="text-center">
                                    <form action="{{ route('produk.destroy',$produk->id) }}" method="POST">
                                        <a href="{{ route('produk.edit',$produk->id) }}" class="btn btn-outline-success">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $produks->links() !!}
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>

@endsection