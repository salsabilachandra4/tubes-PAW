@extends('template.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container py-5">
        <div class="mb-5 row">
            <div class="mb-3 col-md-4 col-sm-6">
                <div class="p-4 text-white rounded shadow d-flex bg-primary align-items-center" style="height: 150px;">
                    <div class="display-1 fw-bold me-3" style="flex: 1;">{{ $totalKost }}</div>
                    <div class="text-end" style="flex: 2;">
                        <div class="fs-6">Kamar Kos</div>
                        <div class="fw-bold">Total</div>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-4 col-sm-6">
                <div class="p-4 text-white rounded shadow d-flex bg-success align-items-center" style="height: 150px;">
                    <div class="display-1 fw-bold me-3" style="flex: 1;">{{ $kostTersedia }}</div>
                    <div class="text-end" style="flex: 2;">
                        <div class="fs-6">Kamar Kos</div>
                        <div class="fw-bold">Tersedia</div>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-4 col-sm-6">
                <div class="px-4 text-white rounded shadow flex-column d-flex bg-danger justify-content-center align-items-center"
                    style="height: 150px;">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-3">{{ $kostPutra }}</span>
                        <span class="fs-6">Kos Putra</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-3">{{ $kostPutri }}</span>
                        <span class="fs-6">Kos Putri</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-3">{{ $kostCampur }}</span>
                        <span class="fs-6">Kos Campur</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="shadow card">
                    <div class="text-white card-header bg-primary">
                        <h5 class="mb-0">Daftar Kos</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kos</th>
                                        <th>Tipe Kos</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($kosts as $kost)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$kost->nama}}</td>
                                        <td>{{$kost->tipe}}</td>
                                        <td>{{$kost->stock}}</td>
                                        <td>
                                            <a href="{{url('admin/detail-data/' . $kost->id)}}" class="btn btn-info btn-sm mx-2">Detail</button>
                                            <a href="{{url('admin/edit-data/' . $kost->id)}}" class="btn btn-warning btn-sm mx-2">Edit</button>
                                            <a href="{{url('admin/hapus-data/' . $kost->id)}}" class="btn btn-danger btn-sm mx-2">Hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $("#dataTable").DataTable({
                serverSide: true,
                processing: true,
                ajax: "/admin/get-data",
                columns: [
                    { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
                    { data: "nama", name: "nama" },
                    { data: "tipe", name: "tipe" },
                    { data: "stock", name: "stock" },
                    { data: "action", name: "action", orderable: false, searchable: false },
                ],
                order: [[0, "desc"]],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"],
                ],
            });
        });
    </script>
@endpush
