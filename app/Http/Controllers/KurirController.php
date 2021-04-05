<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;
use App\Users;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurir = Kurir::all();
        return view('kurir.index', ['kurir' => $kurir]);
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
        $photo = $request->file('photo');
        $messages = [
            'required' => ':attribute wajib diisi lengkap',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maximal :max karakter',
        ];
        $this->validate($request,[
            'nama_kurir' => 'required|min:3|max:30',
            'email_kurir' => 'required|email',
            'photo' => 'required',
            'no_kurir' => 'required|numeric|min:11',
            'password_kurir' => 'required|min:6|max:20',
            'jenis' => 'required'
        ],$messages);
        Kurir::create([
            'nama_kurir' => $request->input('nama_kurir'),
            'email_kurir' => $request->input('email_kurir'),
            'no_kurir' => $request->input('no_kurir'),
            'password_kurir' => $request->input('password_kurir'),
            'jenis' => $request->input('jenis'),
            'photo' => $photo->getClientOriginalName()
        ]);
        Users::create([
            'name' => $request->input('nama_kurir'),
            'email' => $request->input('email_kurir'),
            'password' => $request->input('password_kurir'),
            'phone' => $request->input('no_kurir'),
            'address' => $request->input('jenis'),
            'level' => 'Kurir'

        ]);
        $tujuan_upload = 'image';
        $photo->move($tujuan_upload,$photo->getClientOriginalName());
        return redirect()->route('dashboard.index');
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
        $kurir = Kurir::find($id);
        return view('kurir.edit',['kurir' => $kurir]);
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
        $photo = $req->file('photo');
        $kurir = Kurir::find($id);
        $kurir->nama_kurir = $req->input('nama_kurir');
        $kurir->email_kurir = $req->input('email_kurir');
        $kurir->no_kurir = $req->input('no_kurir');
        $kurir->jenis = $req->input('jenis');
        $kurir->password_kurir = $req->input('password_kurir');
        $kurir->photo = $photo->getClientOriginalName();
        $tujuan_upload = 'image';
        $photo->move($tujuan_upload,$photo->getClientOriginalName());
        $kurir->save();
        return redirect()->route('kurir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $kurir = Kurir::find($id);
        $kurir->delete();
        return redirect()->route('kurir.index');
    }

    public function home(){
        return view('kurir.home');
    }
}
