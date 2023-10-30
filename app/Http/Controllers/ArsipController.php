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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arsips = Arsip::all();
        $title = "Arsip";
        return view("admin.arsip.index", compact(["arsips","title"]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Arsip";
        return view("admin.arsip.create" , compact(["title"]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArsipRequest $request)
    {
        Log::info('Received POST data:', $request->all());

        $validatedData = $request->validate([
            'nama_arsip' => [
                'required',
                Rule::unique('arsips')->where(function ($query) use ($request) {
                    return $query->where('nama_arsip', $request->NamaDokumen);
                }),
            ],
        ]);


        $filename =  $file->getClientOriginalName();
        // File upload location
        $location = '../public/assets/images/';


        Arsip::create([
            'nama_arsip' => $request->nama_arsip,
            'kode_arsip' => $request->kode_arsip,
            'perihal' =>  $request->perihal,
            'lokasi_arsip' => $request->lokasi_arsip,
            'kategori' => $request->kategori,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tanggal_selesai' => $request->tanggal_selesai,
            'file' => $filename,

        ]);

        // $file->move(public_path($location), $filename);
        Session::flash('success', 'Data User Berhasil Ditambahkan');
        return view('admin.user.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Arsip $arsip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arsip $arsip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArsipRequest $request, Arsip $arsip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arsip $arsip)
    {
        //
    }
}
