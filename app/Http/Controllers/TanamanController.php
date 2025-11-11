<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanaman;
use Illuminate\Support\Facades\Auth;


class TanamanController extends Controller
{
    // Tampilkan daftar tanaman
    public function index()
    {
        $tanamans = Tanaman::where('user_id', Auth::id())->get();
        return view('tanamans.myPlants', compact('tanamans'));
    }

    // Tampilkan form untuk tambah tanaman
    public function create()
    {
        return view('tanaman.create');
    }

    // Simpan data tanaman ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'umur' => 'required|integer|min:1',
        ]);

        Tanaman::create([
            'nama' => $request->nama,
            'jenis' => strtolower(trim($request->jenis)), // ✅ Normalisasi
            'umur' => $request->umur,
            'user_id' => Auth::id(),
        ]);


        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil ditambahkan.');
    }

    // Hapus tanaman
    public function destroy($id)
    {
        $tanaman = Tanaman::findOrFail($id);
        $tanaman->delete();

        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil dihapus.');
    }
    // edit tanaman
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|numeric',
        ]);

        $tanaman = Tanaman::findOrFail($id);
        $tanaman->nama = $request->nama;
        $tanaman->umur = $request->umur;

        // Jika form edit mengizinkan ubah jenis:
        if ($request->has('jenis')) {
            $tanaman->jenis = strtolower(trim($request->jenis));
        }

        $tanaman->save();

        return redirect()->back()->with('success', 'Tanaman berhasil diperbarui.');
    }
    // Tampilkan form edit tanaman
    public function edit($id)
    {
        $tanaman = Tanaman::findOrFail($id);

        // Pastikan hanya user yang membuat tanaman ini yang bisa mengedit
        if ($tanaman->user_id != Auth::id()) {
            abort(403); // Unauthorized
        }

        return view('tanaman.edit', compact('tanaman'));
    }

}
