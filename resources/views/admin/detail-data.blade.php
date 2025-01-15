@extends('template.admin')
{{--Digunakan untuk memperluas layout utama (template.admin), 
yang berisi struktur dasar halaman, 
Bagian konten halaman ini akan disisipkan ke dalam @yield('content') yang ada di layout utama.
@section('title', 'Detail Kost') --}} 

@section('content')
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $kost->image) }}" alt="{{ $kost->nama }}"
                {{-- nampilin gambar kos dengan memanfaatkan fungsi asset(), yang mengarahkan ke file gambar yang ada di direktori storage aplikasi --}}
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
                        {{-- Memeriksa apakah status kos adalah Tersedia. Jika benar, maka ditampilkan badge hijau (bg-success) dengan teks Tersedia --}}
                    @else
                        <span class="badge bg-danger">Penuh</span>
                    @endif
                </p>
                <p><strong>Stok:</strong> {{ $kost->stock }} kamar</p> 
                {{-- nampilin stok kamar yang tersedia  --}}
                <p><strong>Deskripsi:</strong></p>
                {{-- nampilin deskripsi kos --}}
                <p>{{ $kost->deskripsi }}</p>
                {{-- deskripsi lebih detail ttg kos nya  --}}
                <div class="mt-4">
                    <a href="{{ url('/admin') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
