@extends('layouts.app')

@section('content')
<h2 class="mb-4">Daftar Kategori Buku</h2>

<div class="row">
    @foreach($kategori_list as $kategori)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5>{{ $kategori['nama'] }}</h5>
                <p>{{ $kategori['deskripsi'] }}</p>
                <p><strong>Jumlah Buku:</strong> {{ $kategori['jumlah_buku'] }}</p>
                <a href="{{ route('kategori.show', $kategori['id']) }}" class="btn btn-primary btn-sm">
                    Detail
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection