@extends('template.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="col-12 d-flex flex-row justify-content-around">
                <div class="card" style="width: 18rem;">
                    <img src="https://coder-telkomsby.com/assets/images/blog-dummy.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('/home/detail')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://coder-telkomsby.com/assets/images/blog-dummy.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('/home/detail')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex flex-row justify-content-around">
                <div class="card" style="width: 18rem;">
                    <img src="https://coder-telkomsby.com/assets/images/blog-dummy.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('/home/detail')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://coder-telkomsby.com/assets/images/blog-dummy.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('/home/detail')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
