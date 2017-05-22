<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\status;

class statusController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

    public function awal()
	{
		return view('status.awal', ['data'=>status::all()]);
	}
	public function tambah()
	{
		return view('status.tambah');
	}	
    public function simpan(Request $input)
	{
		$status = new status;
		$status->nama_status = $input->nama;
		$informasi = $status->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('status')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$status = status::find($id);
		return view('status.edit')->with(array('status'=>$status));
	}
	public function lihat($id)
	{
		$status = status::find($id);
		return view('status.lihat')->with(array('status'=>$status));
	}
	public function update($id, Request $input)
	{
		$status = status::find($id);
		$status->nama_status = $input->nama;
		$informasi = $status->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('status')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$status = status::find($id);
		$informasi = $status->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('status')->with(['informasi'=>$informasi]);
	}
}
