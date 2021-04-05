<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Pesanan;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('pesanan.index',['pesanan' => $pesanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        Pesanan::create([
            'nama' => $req->input('nama'),
            'alamat' => $req->input('alamat'),
            'id_produk' => $req->input('id_produk'),
            'jumlah' => $req->input('jumlah'),
            'tgl_pesanan' => $req->input('tgl_pesanan'),
        ]);
        return redirect()->route('produk.index');
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

    public function showProduk($id)
    {
        if(Pesanan::where('id_pesanan', $id)->count() > 0){
            $produk = DB::table('table_pesanan')
            ->join('table_kategori','table_buku.kategori','=','table_kategori.deskripsi')
            ->select('table_buku.id_buku','table_buku.judul_buku','table_buku.deskripsi','table_kategori.deskripsi as kategori','table_buku.penulis','table_buku.cover_img')
            ->where('table_buku.id_buku','=', $id)
            ->get();
            return $produk;
        } else{
            return 'false';
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function home()
    {
        $produk = Produk::all();
        return view('user.user',['produk' => $produk]);
    }

    public function pesan($id)
    {
        $produk = Produk::find($id);
        return view('user.new',['produk' => $produk]);
    }
}
