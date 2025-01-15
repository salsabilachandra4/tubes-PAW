@extends('template.admin')

@section('title', 'Edit Data Kos')

@section('content')
    <div class="container p-4 h-100 d-flex justify-content-center align-items-center">
        <div class="p-4 bg-white border border-black rounded flex-column d-flex col-md-6">
            <div class="mb-4 text-center">
                <h2>Edit Data Kos</h2>
            </div>
            {{-- Formulir untuk mengedit data kos --}}
            <form action="{{ url('/admin/edit-data/' . $kost->id) }}" method="POST" enctype="multipart/form-data"> {{-- Mengarah ke endpoint /admin/edit-data/{id} untuk memproses data yang dikirim--}}
                @csrf
                @method('PUT')

                {{-- Input Nama Kos --}}
                <div class="mb-3 g-3 d-flex row">

                    {{-- Dropdown Tipe Kos --}}
                    <div class="col-6">
                        <label for="nama" class="form-label">Nama Kos</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $kost->nama }}"
                       
                            placeholder="Masukkan Nama Kos" required>
                    </div>
                    <div class="col-6">
                        <label for="tipe" class="form-label">Tipe Kos</label>
                        <select class="form-select" id="tipe" name="tipe" required>
                            

                            <option value="" disabled {{ $kost->tipe == '' ? 'selected' : '' }}>Pilih Tipe Kos
                            </option> {{-- ini adalah cara untuk memeriksa apakah tipe kos kosong ($kost->tipe == ''  --}}
                            <option value="Putra" {{ $kost->tipe == 'Putra' ? 'selected' : '' }}>Putra</option>
                            {{-- value putra Nilai yang akan dikirimkan ketika pengguna memilih opsi ini --}}
                            <option value="Putri" {{ $kost->tipe == 'Putri' ? 'selected' : '' }}>Putri</option>
                            {{-- value putri Nilai yang akan dikirimkan ketika pengguna memilih opsi ini --}}
                            <option value="campur" {{ $kost->tipe == 'Campur' ? 'selected' : '' }}>Campur</option>
                        </select>
                    </div>
                </div>

                {{-- Input Alamat Kos --}}
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="1" placeholder="Masukkan Alamat Kos" required>{{ $kost->alamat }}</textarea>
                </div>

                {{-- Dropdown Status Kos --}}
                <div class="col-6">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="" disabled {{ $kost->status == '' ? 'selected' : '' }}>Status Kos</option>
                        <option value="Tersedia" {{ $kost->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="Penuh" {{ $kost->status == 'Penuh' ? 'selected' : '' }}>Penuh</option>
                    </select>
                </div>

                {{-- Input Harga Kos --}}
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" min="0.00" name="harga" id="harga"
                            value="{{ $kost->harga }}" placeholder="Masukkan Harga Kos" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>

                 {{-- Input Stok dan Gambar Kos --}}
                <div class="mb-3 g-3 d-flex row">
                    <div class="col-6">
                        <label for="stock" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stock" name="stock" min="0"
                            value="{{ $kost->stock }}" placeholder="Masukkan Stok Kamar" required>
                    </div>
                    <div class="col-6">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                </div>

                {{-- Input Deskripsi Kos --}}
                <div class="mb-4">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi" required>{{ $kost->deskripsi }}</textarea>
                </div>
                {{-- Tombol Simpan --}}
                <div class="d-flex justify-content-center">
                    <button class="w-50 btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
