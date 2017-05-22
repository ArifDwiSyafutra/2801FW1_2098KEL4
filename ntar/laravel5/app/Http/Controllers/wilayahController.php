<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\wilayah;

class wilayahController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

    public function awal()
	{
		return view('wilayah.awal', ['data'=>wilayah::all()]);
	}
	public function tambah()
	{
		return view('wilayah.tambah');
	}	
    public function simpan(Request $input)
	{
		$wilayah = new wilayah;
		$wilayah->nama_wilayah = $input->nama;
		$wilayah->harga = $input->Harga;
		$informasi = $wilayah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('wilayah')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$wilayah = wilayah::find($id);
		return view('wilayah.edit')->with(array('wilayah'=>$wilayah));
	}
	public function lihat($id)
	{
		$wilayah = wilayah::find($id);
		return view('wilayah.lihat')->with(array('wilayah'=>$wilayah));
	}
	public function update($id, Request $input)
	{
		$wilayah = wilayah::find($id);
		$wilayah->nama_wilayah = $input->nama;
		$informasi = $wilayah->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('wilayah')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$wilayah = wilayah::find($id);
		$informasi = $wilayah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('wilayah')->with(['informasi'=>$informasi]);
	}
}
