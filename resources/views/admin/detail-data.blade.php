@extends('template.admin')

@section('title', 'Detail Kost')

@section('content')
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $kost->image) }}" alt="{{ $kost->nama }}"
                    class="rounded shadow-sm img-fluid w-100">
            </div>

            <div class="col-md-6">
                <h1 class="mb-3">{{ $kost->nama }}</h1>
                <h4 class="mb-3">Rp. {{ number_format($kost->harga) }}</h4>
                <p><strong>Tipe:</strong> {{ $kost->tipe }}</p>
                <p><strong>Alamat:</strong> {{ $kost->alamat }}</p>
                <p><strong>Status:</strong>
                    @if ($kost->status === 'Tersedia')
                        <span class="badge bg-success">Tersedia</span>
                    @else
                        <span class="badge bg-danger">Penuh</span>
                    @endif
                </p>
                <p><strong>Stok:</strong> {{ $kost->stock }} kamar</p>
                <p><strong>Deskripsi:</strong></p>
                <p>{{ $kost->deskripsi }}</p>

                <div class="mt-4">
                    <a href="{{ url('/admin') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
