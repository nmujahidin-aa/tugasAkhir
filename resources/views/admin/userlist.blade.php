@extends('admin.masteradmin')
@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">
        <strong>User</strong> Terdaftar
    </h1>

    <div class="row">
        <div class="col-12 col-lg-8 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Nama Pengguna</th>
                            <th
                                class="d-none d-xl-table-cell"
                            >
                                Email
                            </th>
                            <th
                                class="d-none d-xl-table-cell"
                            >
                                Tanggal Registrasi
                            </th>
                            <th
                                class="d-none d-md-table-cell"
                            >
                                Jumlah Buku Diunggah
                            </th>
                            <th
                                class="d-none d-md-table-cell"
                            >
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-body d-flex w-100">
                    <div
                        class="align-self-center chart chart-lg"
                    >
                        <canvas
                            id="chartjs-dashboard-bar"
                        ></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        
    </div>
</div>
@endsection