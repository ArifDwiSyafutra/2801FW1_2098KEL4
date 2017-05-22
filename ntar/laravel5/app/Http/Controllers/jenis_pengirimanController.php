<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jenis_pengiriman;
use App\pengiriman;

class jenis_pengirimanController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

    public function awal()
	{
		return view('jenis_pengiriman.awal', ['data'=>jenis_pengiriman::all()]);
	}
	public function tambah()
	{
		return view('jenis_pengiriman.tambah');
	}	
    public function simpan(Request $input)
	{
		$jenis_pengiriman = new jenis_pengiriman;
		$jenis_pengiriman->nama_jp = $input->nama;
		$jenis_pengiriman->harga = $input->Harga;
		$informasi = $jenis_pengiriman->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('jenis_pengiriman')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$jenis_pengiriman = jenis_pengiriman::find($id);
		return view('jenis_pengiriman.edit')->with(array('jenis_pengiriman'=>$jenis_pengiriman));
	}
	public function lihat($id)
	{
		$jenis_pengiriman = jenis_pengiriman::find($id);
		return view('jenis_pengiriman.lihat')->with(array('jenis_pengiriman'=>$jenis_pengiriman));
	}
	public function update($id, Request $input)
	{
		$jenis_pengiriman = jenis_pengiriman::find($id);
		$jenis_pengiriman->nama_jp = $input->nama;
		$jenis_pengiriman->harga = $input->harga;
		$informasi = $jenis_pengiriman->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('jenis_pengiriman')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$jenis_pengiriman = jenis_pengiriman::find($id);
		$informasi = $jenis_pengiriman->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('jenis_pengiriman')->with(['informasi'=>$informasi]);
	}
}
