@extends('template.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-4 border border-black rounded p-4">
            <div class="d-flex align-items-center justify-content-center mb-4">
                <h1>Login</h1>
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Button</button>
              </div>
        </div>
    </div>
</div>

@endsection
