<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Http\Requests\StoreArsipRequest;
use App\Http\Requests\UpdateArsipRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ArsipController extends Controller
{
    public function index()
    {
        $arsips = Arsip::all();
        $title = "Arsip";
        return view("admin.arsip.index", compact(["arsips", "title"]));
    }
    public function create()
    {
        $title = "Tambah Arsip";
        return view("admin.arsip.create", compact(["title"]));
    }
    public function store(StoreArsipRequest $request)
    {
        // Log::info('Received POST data:', $request->all());
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);

        Arsip::create([
            'nama_arsip' => $request->nama_arsip,
            'kode_arsip' => $request->kode_arsip,
            'perihal' =>  $request->perihal,
            'lokasi_arsip' => $request->lokasi_arsip,
            'kategori' => $request->kategori,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tanggal_selesai' => $request->tanggal_selesai,
            'file' => $request->file,
        ]);

        // $file->move(public_path($location), $filename);
        Session::flash('success', 'Data User Berhasil Ditambahkan');
        return view('admin.arsip.create');
    }


    public function show(Arsip $arsip)
    {
        //
    }


    public function edit(Arsip $arsip)
    {
        //
    }

    public function update(UpdateArsipRequest $request, Arsip $arsip)
    {
        //
    }

    public function destroy(Arsip $arsip)
    {
        //
    }
}
