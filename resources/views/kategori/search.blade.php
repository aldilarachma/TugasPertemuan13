@extends('layouts.app')

@section('content')
<h2>Hasil Pencarian: <span class="text-danger">{{ $keyword }}</span></h2>

@if($kategori_list->count() > 0)
    <div class="row">
        @foreach($kategori_list as $kategori)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>{!! str_ireplace($keyword, '<mark>'.$keyword.'</mark>', $kategori['nama']) !!}</h5>
                    <p>{!! str_ireplace($keyword, '<mark>'.$keyword.'</mark>', $kategori['deskripsi']) !!}</p>
                    <a href="{{ route('kategori.show', $kategori['id']) }}" class="btn btn-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="alert alert-danger">
        Tidak ada kategori ditemukan.
    </div>
@endif
@endsection