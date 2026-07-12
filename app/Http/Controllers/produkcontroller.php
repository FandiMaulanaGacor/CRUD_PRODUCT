<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = produk::all();
        return view ('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'harga' => 'required',
        'stok' => 'required',
    ]);

    produk::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'harga' => $request->harga,
        'stok' => $request->stok,
    ]);

    return redirect()
        ->route('produk.index')
        ->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $produk)
    {
         $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'harga' => 'required',
        'stok' => 'required',
    ]);

    $produk->update([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'harga' => $request->harga,
        'stok' => $request->stok,
    ]);

    return redirect()->route('produk.index')
        ->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $produk->delete();

        return redirect()
            ->route('produk.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
