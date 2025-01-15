@extends('template.template')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="p-4 border border-black rounded col-4">
                <div class="mb-4 d-flex align-items-center justify-content-center">
                    <h1>Login</h1>
                </div>
                <form action="{{ url('/login') }}" method="POST">
                    {{-- data formulir akan dikirim ke URL /login menggunakan metode POST --}}
                    @csrf
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                        {{--  yang akan menerima alamat email pengguna. Kelas form-control adalah kelas dari Bootstrap untuk memberi tampilan standar pada elemen input --}}
                            placeholder="Masukkan Email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                        {{--yang akan menerima kata sandi pengguna, dengan type="password" agar input tersebut disembunyikan--}}
                            placeholder="Masukkan Password">
                    </div>
                    <div class="gap-2 d-grid">
                        <button class="btn btn-primary" type="submit">Button</button>
                       {{--yang ngirim data formulir ke server--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
