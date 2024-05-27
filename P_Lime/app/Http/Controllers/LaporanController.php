<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $laporans = Laporan::all();
        return view('laporan.view', compact('laporans'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('laporan.create');


    }

    public function track()
    {
        return view('laporan.track');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'lampiran' => 'nullable|file|max:2048',
        ]);

        $laporan = new Laporan();
        $laporan->judul = $validatedData['judul'];
        $laporan->deskripsi = $validatedData['deskripsi'];
        $laporan->kategori = $validatedData['kategori'];

        if ($request->hasFile('lampiran')) {
            $filePath = $request->file('lampiran')->store('lampiran-laporan', 'public');
            $laporan->lampiran = $filePath;
        }

        $laporan->save();

        return redirect()->route('laporan.view')->with('success', 'Laporan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function index()
    {
        //
    }
}