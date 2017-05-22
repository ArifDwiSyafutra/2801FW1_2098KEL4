<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\petugas;

class petugasController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

    public function awal()
    {
        return view('petugas.awal', ['data'=>petugas::all()]);
    }
    public function tambah()
    {
        return view('petugas.tambah');
    }   
    public function simpan(Request $input)
    {
        $petugas = new petugas;
        $petugas->nama_petugas = $input->nama;
        $informasi = $petugas->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('petugas')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $petugas = petugas::find($id);
        return view('petugas.edit')->with(array('petugas'=>$petugas));
    }
    public function lihat($id)
    {
        $petugas = petugas::find($id);
        return view('petugas.lihat')->with(array('petugas'=>$petugas));
    }
    public function update($id, Request $input)
    {
        $petugas = petugas::find($id);
        $petugas->nama_petugas = $input->nama;
        $informasi = $petugas->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('petugas')->with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $petugas = petugas::find($id);
        $informasi = $petugas->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('petugas')->with(['informasi'=>$informasi]);
    }
}
