@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class=" card border-light p-4">
                <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary p-3 mb-4">
                    <h5 class="mb-0">Buat Kategori</h5>
                </a>

                @if ($message = Session::get('success'))
                <div class="alert alert-success mb-4">
                    <p class="mb-0">{{ $message }}</p>
                </div>
                @endif

                <div class="bdr table-responsive">
                    <table class="table table-striped ">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="text-center">No</th>
                                <th >Nama Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategoris as $kategori)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $kategori->nama }}</td>
                                <td class="text-center">
                                    <form action="{{ route('kategori.destroy',$kategori->id) }}" method="POST">
                                        <a href="{{ route('kategori.edit',$kategori->id) }}"
                                            class="btn btn-outline-success">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                    
                </div>
                <div class="d-flex justify-content-center">
                    {!! $kategoris->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection