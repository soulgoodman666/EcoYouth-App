<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tip;


class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::all(); // atau bisa pakai pagination: Tip::paginate(10)
        return view('tips.index', compact('tips'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showTip($id)
    {
        // Memuat data dari file tips.php
        $tips = include app_path('Data/tips.php');

        if (!isset($tips[$id])) {
            abort(404, 'Tips tidak ditemukan');
        }

        $tip = $tips[$id];

        return view('tips.show', compact('tip'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tip = Tip::findOrFail($id);

        // Tampilkan halaman edit dengan data tip
        return view('tips.edit', compact('tip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Validasi data
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data tip berdasarkan ID
        $tip = Tip::findOrFail($id);

        // Perbarui data tip
        $tip->judul = $request->input('judul');
        $tip->deskripsi = $request->input('deskripsi');

        // Jika ada gambar baru, simpan gambar tersebut
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('tips', 'public');
            $tip->image_url = $imagePath;
        }

        // Simpan perubahan ke database
        $tip->save();

        // Redirect ke halaman tips dengan pesan sukses
        return redirect()->route('tips.index')->with('success', 'Tip berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tip = Tip::findOrFail($id);

        // Hapus gambar jika ada
        if ($tip->image_url) {
            Storage::disk('public')->delete($tip->image_url);
        }

        // Hapus data tip dari database
        $tip->delete();

        // Redirect ke halaman tips dengan pesan sukses
        return redirect()->route('tips.index')->with('success', 'Tip berhasil dihapus');
    }
}
