<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request\KurirRequest;
use App\Http\Requests;
use App\kurir;

class kurirController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

    public function awal()
	{
		return view('kurir.awal', ['data'=>kurir::all()]);
	}
	public function tambah()
	{
		return view('kurir.tambah');
	}	
    public function simpan(Request $input)
	{

		$kurir = new kurir;
		$kurir->nama_kurir = $input->nama;
		$informasi = $kurir->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('kurir')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$kurir = kurir::find($id);
		return view('kurir.edit')->with(array('kurir'=>$kurir));
	}
	public function lihat($id)
	{
		$kurir = kurir::find($id);
		return view('kurir.lihat')->with(array('kurir'=>$kurir));
	}
	public function update($id, Request $input)
	{
		$kurir = kurir::find($id);
		$kurir->nama_kurir = $input->nama;
		$informasi = $kurir->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('kurir')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$kurir = kurir::find($id);
		$informasi = $kurir->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('kurir')->with(['informasi'=>$informasi]);
	}
}
