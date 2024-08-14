<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Jadwal = Jadwal::get();

        return view('detail', compact('Jadwal'));
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
        //
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

        return view('form',[
            'Jadwal' => Jadwal::find($id)],
        compact('Jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Jadwal = Jadwal::find($id);

    // Prepare update data
    $updateData = [];

    $updateData = ['active' => 'active'];

    // Handle image upload if a new file is provided
    if ($request->hasFile('foto')) {
        // Delete the old file if it exists
        if ($Jadwal->foto && Storage::exists($Jadwal->foto)) {
            Storage::delete($Jadwal->foto);
        }
        
        // Store the new file and update the path
        $path = $request->file('foto')->store('images', 'public');
        $updateData['foto'] = $path;
    }

    // Update the record with new data if there's anything to update
    if (!empty($updateData)) {
        $Jadwal->update($updateData);
    }

    return to_route('Detail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
