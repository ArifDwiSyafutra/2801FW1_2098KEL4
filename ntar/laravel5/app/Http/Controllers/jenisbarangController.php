<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\jenisbarang;
use App\Http\Requests\ValidasiBarang;

class jenisbarangController extends Controller {

	// /*-------------------------------Tampil Admin Dashboard-------------------------------*/
	// public function index()
	// {
	// 	$jenisbarang= JenisBarang::all();
	// 	$user = Auth::user();
	// 	return view("petugas.admindashboard",compact('jenisbarang','user'));
	// }
	// /*------------------------------------------------------------------------------------*/
	// /*-------------------------------Tampil Tabel Pelanggan-------------------------------*/
    public function awal()
	{
		return view('jenisbarang.awal', ['data'=>jenisbarang::all()]);
	}
	public function tambah()
	{
		return view('jenisbarang.tambah');
	}	
    public function simpan(Request $input)
	{
		$jenisbarang = new jenisbarang;
		$jenisbarang->nama_jenis_barang = $input->nama;
		$informasi = $jenisbarang->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('jenisbarang')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$jenisbarang = jenisbarang::find($id);
		return view('jenisbarang.edit')->with(array('jenisbarang'=>$jenisbarang));
	}
	public function lihat($id)
	{
		$jenisbarang = jenisbarang::find($id);
		return view('jenisbarang.lihat')->with(array('jenisbarang'=>$jenisbarang));
	}
	public function update($id, Request $input)
	{
		$jenisbarang = jenisbarang::find($id);
		$jenisbarang->nama_jenis_barang = $input->nama;
		$informasi = $jenisbarang->save() ? 'Berhasil update data' : 'Gagal update data';
		return redirect('jenisbarang')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$jenisbarang = jenisbarang::find($id);
		$informasi = $jenisbarang->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('jenisbarang')->with(['informasi'=>$informasi]);
	}
}


