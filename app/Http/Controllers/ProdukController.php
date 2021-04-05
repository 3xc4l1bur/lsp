<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index',['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('produk.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {   
        $icon = $req->file('icon');
        Produk::create([
            'nama' => $req->input('nama'),
            'harga' => $req->input('harga'),
            'deskripsi' => $req->input('deskripsi'),
            'icon' => $icon->getClientOriginalName()
        ]);
        $tujuan = 'image';
        $icon->move($tujuan,$icon->getClientOriginalName());
        return redirect()->route('produk.index');
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
        $produk = Produk::find($id);
        return view('produk.edit',['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $file = $req->file('icon');
        $produk = Produk::find($id);
        $produk->nama = $req->input('nama');
        $produk->harga = $req->input('harga');
        $produk->deskripsi = $req->input('deskripsi');
        $produk->icon = $req->input('icon');
        $produk->icon = $file->getClientOriginalName();
        $tujuan = 'image';
        $file->move($tujuan,$file->getClientOriginalName());
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
