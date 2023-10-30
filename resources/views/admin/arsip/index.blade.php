@extends('layouts.app')

@section('content')
    <section>
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
                                <button  class="btn btn-primary" id="openPopupButton"
                                    style="font-size: 20px; border-radius: 20px;"><a
                                        href="{{ route('arsip.create') }}">Tambah Arsip Baru</a> </button>
                            </div>
                        </div>

                    </div><br>
                    <div class="row py-6">
                        <div class="col-lg-12 mx-auto">
                            <div class="card rounded shadow border-2">
                                <div class="card-body p-5 bg-white rounded">
                                    <div class="table-responsive">
                                        <table id="example" style="width: 100%"
                                            class="table table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Arsip</th>
                                                    <th>Kode Arsip</th>
                                                    <th>Perihal</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal Terbit</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Lokasi Arsip</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($arsips as $arsip)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $arsip->nama_arsip }}</td>
                                                        <td>{{ $arsip->kode_arsip }}</td>
                                                        <td>{{ $arsip->perihal }}</td>
                                                        <td>{{ $arsip->kategori }}</td>
                                                        <td>{{ $arsip->tanggal_terbit }}</td>
                                                        <td>{{ $arsip->tanggal_selesai }}</td>
                                                        <td>{{ $arsip->lokasi_arsip }}</td>
                                                        <td><button class="btn btn-primary"><i
                                                                    class="fas fa-eye"></i></button>
                                                            <button class="btn btn-warning"><i
                                                                    class="fas fa-edit"></i></button>
                                                            <button class="btn btn-danger"><i
                                                                    class="fas fa-trash"></i></button>
                                                            <button class="btn btn-success"><i
                                                                    class="fas fa-download"></i></button>
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
    </section>
@endsection
