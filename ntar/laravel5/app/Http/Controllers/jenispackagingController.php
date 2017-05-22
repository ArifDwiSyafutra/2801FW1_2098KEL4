<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jenispackaging;
use App\pengiriman;
class jenispackagingController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

    public function awal()
	{
		return view('jenispackaging.awal', ['data'=>jenispackaging::all()]);
	}
	public function tambah()
	{
		return view('jenispackaging.tambah');
	}	
    public function simpan(Request $input)
	{
		$jenispackaging = new jenispackaging;
		$jenispackaging->nama_jenis_packaging = $input->nama;
		$jenispackaging->harga = $input->Harga;
		$informasi = $jenispackaging->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('jenispackaging')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$jenispackaging = jenispackaging::find($id);
		return view('jenispackaging.edit')->with(array('jenispackaging'=>$jenispackaging));
	}
	public function lihat($id)
	{
		$jenispackaging = jenispackaging::find($id);
		return view('jenispackaging.lihat')->with(array('jenispackaging'=>$jenispackaging));
	}
	public function update($id, Request $input)
	{
		$jenispackaging = jenispackaging::find($id);
		$jenispackaging->nama_jenis_packaging = $input->nama;
		$jenispackaging->harga = $input->harga;
		$informasi = $jenispackaging->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('jenispackaging')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$jenispackaging = jenispackaging::find($id);
		$informasi = $jenispackaging->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('jenispackaging')->with(['informasi'=>$informasi]);
	}
}
