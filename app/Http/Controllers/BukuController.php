<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BukuController extends Controller
{
    public function index(): View
    {
        $bukus = Buku::all();
        return view('admin.buku.index', compact('bukus'));
    }

    public function create(): View
    {
        return view('admin.buku.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'isbn' => 'required|integer',
            'jumlah_salinan' => 'required|integer',
            'status' => 'required|integer',
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if ($request->hasFile('gambar')) {
        //     $imageName = time() . '.' . $request->gambar->extension();
        //     $request->gambar->move(public_path('images/images/product'), $imageName);
        //     $validatedData['gambar'] = $imageName;
        // }
        Buku::create($validatedData);

        return redirect()->route('bukus.index')->with('success', 'Data buku berhasil ditambahkan');
    }

    public function edit(Buku $buku): View
    {
        return view('admin.buku.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku): RedirectResponse
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'isbn' => 'required|integer',
            'jumlah_salinan' => 'required|integer',
            'status' => 'required|integer',
        ]);

        // if ($request->hasFile('gambar')) {
        //     $imageName = time() . '.' . $request->gambar->extension();
        //     $request->gambar->move(public_path('images/images/product'), $imageName);
        //     $validatedData['gambar'] = $imageName;
        // }

        $buku->update($validatedData);

        return redirect()->route('bukus.index')->with('success', 'Data buku berhasil diperbarui');
            // $validation['gambar'] = $imageName;
    }

    public function destroy(Buku $buku): RedirectResponse
    {
        $buku->delete();
        return redirect()->route('bukus.index')->with('success', 'Data buku berhasil dihapus');
    }

    public function search(Request $request): View
{
    $searchKeyword = $request->input('katakunci');

    $products = Buku::where('judul', 'LIKE', "%$searchKeyword%")
                        ->orWhere('isbn', 'LIKE', "%$searchKeyword%")
                        ->orWhere('penulis', 'LIKE', "%$searchKeyword%")
                        ->get();

    return view('admin.buku.index', compact('bukus'));
}
}
