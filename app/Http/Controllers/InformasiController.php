<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    public function informasi()
    {
        $informasi = Informasi::latest()->get(); // Mengambil semua informasi terbaru
        return view('berita.informasi', compact('informasi'));
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_informasi' => 'required|date',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/informasi', $filename); // Simpan gambar ke storage
            $input['gambar'] = 'informasi/' . $filename;
        }

        Informasi::create($input);

        return redirect()->route('informasi.index')
            ->with('success', 'Informasi berhasil ditambahkan.');
    }

    public function show(Informasi $informasi)
    {
        return view('informasi.show', compact('informasi'));
    }

    public function edit(Informasi $informasi)
    {
        return view('informasi.edit', compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_informasi' => 'required|date',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($informasi->gambar && Storage::exists('public/' . $informasi->gambar)) {
                Storage::delete('public/' . $informasi->gambar);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/informasi', $filename); // Simpan gambar ke storage
            $input['gambar'] = 'informasi/' . $filename;
        }

        $informasi->update($input);

        return redirect()->route('informasi.index')
            ->with('success', 'Informasi berhasil diperbarui.');
    }

    public function destroy(Informasi $informasi)
    {
        // Hapus gambar jika ada
        if ($informasi->gambar && Storage::exists('public/' . $informasi->gambar)) {
            Storage::delete('public/' . $informasi->gambar);
        }

        $informasi->delete();

        return redirect()->route('informasi.index')
            ->with('success', 'Informasi berhasil dihapus.');
    }
}
