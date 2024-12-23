@extends('template.admin')

@section('title', 'Detail Kos')

@section('content')
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://coder-telkomsby.com/assets/images/blog-dummy.png" alt="" class="rounded shadow-sm img-fluid w-100">
            </div>

            <div class="col-md-6">
                <h1 class="mb-3">Kos Indah</h1>
                <p><strong>Tipe:</strong>Campur</p>
                <p><strong>Alamat:</strong> Jl. Merdeka 10</p>
                <p><strong>Status:</strong>
                        <span class="badge bg-success">Tersedia</span>
                </p>
                <p><strong>Stok:</strong> 9 kamar</p>
                <p><strong>Deskripsi:</strong></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae autem corrupti quidem. Voluptatibus nisi sequi maiores eveniet modi at soluta.</p>

                <div class="mt-4">
                    <a href="{{ url('/admin/dashboard') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
