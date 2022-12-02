@extends('admin.masteradmin')
@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">
        <strong>Analytics</strong> Dashboard
    </h1>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3>{{$total_categories}}</h3>
                    <h4>Total Kategori Buku</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3>{{$total_books}}</h3>
                    <h4>Total Buku</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3>{{$total_user}}</h3>
                    <h4>Total User</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Nama Ketegori</th>
                                <th>Jumlah Buku</th>
                            </thead>
                            <tbody>
                                @foreach($categories as $index => $row)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{count($row->books)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection