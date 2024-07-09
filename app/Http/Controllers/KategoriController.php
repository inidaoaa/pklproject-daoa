<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        confirmDelete('Delete', 'yakin?');
        return view('admin.kategori.index', compact('kategoris'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategoris = new Kategori;
        $kategoris->nama_kategori = $request->nama_kategori;
        Alert::success('success', "data berhasil ditambah")->autoClose(1000);
        $kategoris->save();
        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoris = kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategoris'));

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
        $kategoris = Kategori::findOrFail($id);
        $kategoris->nama_kategori = $request->nama_kategori;
        $kategoris->save();
        Alert::success('success', "data berhasil diubah")->autoClose(1000);

        return redirect()->route('kategori.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoris = Kategori::findOrFail($id);
        $kategoris->delete();

        Alert::success('success', "data berhasil dihapus")->autoClose(1000);

        return redirect()->route('kategori.index');

    }
}
