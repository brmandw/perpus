<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBuku;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class DataBukuController extends Controller
{
    public function index()
    {
        $data_buku = DataBuku::all();
        return view('admin.databuku.index', compact('data_buku')); 
    }

    public function perpustakaan()
    {
        $data_buku = DataBuku::all();
        return view('peminjam.perpustakaan.index', compact('data_buku')); 
    }

    public function create()
    {
        $data_buku = DataBuku::all();
        return view('admin.databuku.create', compact('data_buku')); 
    }

    /**
     * Menyimpan data buku ke database
     */
    public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1000|max:' . date('Y'),
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);


        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
        }

        DataBuku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'cover' => $coverPath,
        ]);
        

        return redirect()->route('admin.databuku.index')->with('success', 'Buku berhasil ditambahkan!');
    } catch (\Illuminate\Validation\ValidationException $e) {
        dd('Validasi gagal', $e->errors()); // Debug validasi error
    }
}

public function destroy($id)
{
    $data_buku = DataBuku::findOrFail($id);

        // Cek apakah user yang sedang login ingin menghapus dirinya sendiri
        if (auth()->user()->id == $data_buku->id) {
            return redirect()->back()->with('error', 'Anda tidak bisa menghapus akun Anda sendiri!');
        }

    // Hapus obat
    $data_buku->delete();

    return redirect()->route('admin.databuku.index')->with('success', 'Data berhasil dihapus.');
}

public function update(Request $request, $id)
{
    $data_buku = DataBuku::findOrFail($id);

    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer|min:1000|max:' . date('Y'),
        'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
    ]);

    $data_buku->judul = $validatedData['judul'];
    $data_buku->penulis= $validatedData['penulis'];
    $data_buku->penerbit = $validatedData['penerbit'];
    $data_buku->tahun_terbit = $validatedData['tahun_terbit'];

    // Jika ada cover baru, simpan dan hapus yang lama
    if ($request->hasFile('cover')) {
        // Hapus cover lama jika ada
        if ($data_buku->cover) {
            \Storage::delete('public/covers/' . $data_buku->cover);
        }

        $coverPath = $request->file('cover')->store('covers', 'public'); 
        $data_buku->cover = $coverPath;
    }

    $data_buku->save();

    return redirect()->route('admin.databuku.index')->with('success', 'Data Buku berhasil diperbarui');
}

}