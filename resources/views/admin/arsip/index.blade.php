@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
        <link rel="stylesheet" href="css/arsip.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    </head>

    <body>

        <div class="container py-5" style="background-color: blue; border-radius: 25px;">
            <div class="container py-6">
                <div class="card-header" style="background-color: blue; color: white; border-bottom: 2px solid white;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="font-weight-bold" style="font-size: 30px;">Arsip</span>
                        </div>
                        <div>
                            <button class="btn btn-success"
                                style="font-size: 24px; border-radius: 100px; background-color: #0D72F2">+</button>
                            <button class="btn btn-primary" id="openPopupButton"
                                style="font-size: 20px; border-radius: 20px;">Tambah Arsip Baru</button>
                        </div>
                    </div>

                </div><br>
                <div class="row py-6">
                    <div class="col-lg-12 mx-auto">
                        <div class="card rounded shadow border-2">
                            <div class="card-body p-5 bg-white rounded">
                                <div class="table-responsive">
                                    <table id="example" style="width: 100%" class="table table-striped table-bordered">

                                        <thead>
                                            <tr>
                                                <th>Nama Arsip</th>
                                                <th>Kode Arsip</th>
                                                <th>Perihal</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Terbit</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Lokasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($arsips as $arsip )
                                            <tr>
                                                <td>{{$arsip->nama}}</td>
                                                <td>{{$arsip->k}}</td>
                                                <td>{{$arsip->nama}}System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>2011/04/25</td>
                                                <td>2011/04/25</td>
                                                <td>Loker A</td>
                                                <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                                    <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                    <button class="btn btn-success"><i class="fas fa-download"></i></button>
                                                </td>
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
        </div>

        <!-- Sisipkan script untuk jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- Sisipkan script untuk DataTables -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <!-- Sisipkan script untuk file JavaScript Anda -->
        <script src="js/arsip.js"></script>
    </body>

    </html>
@endsection