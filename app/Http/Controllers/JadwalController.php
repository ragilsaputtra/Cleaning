<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Jadwal = Jadwal::get();

        return view('admin.index', compact('Jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jadwal::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'waktu' => $request->waktu,
        ]);
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
        $Jadwal = Jadwal::get();

        return view('admin.edit',[
            'Jadwal' => Jadwal::find($id)],
        compact('Jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Jadwal = Jadwal::find($id);

        $Jadwal->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'waktu' => $request->waktu,        
        ]);

        return to_route('Jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Jadwal = Jadwal::find($id);

        $Jadwal->delete();

        return to_route('Jadwal.index');
    }
}
