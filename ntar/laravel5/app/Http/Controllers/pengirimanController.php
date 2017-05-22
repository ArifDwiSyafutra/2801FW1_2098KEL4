<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengiriman;
use App\kurir;
use App\petugas;
use App\jenis_pengiriman;
use App\jenisbarang;
use App\jenispackaging;
use App\wilayah;
class pengirimanController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

    public function awal()
	{
		$semuaPengiriman = pengiriman::all();
    	return view('pengiriman.awal', compact('semuaPengiriman'));
	}
	public function tambah()
	{
		$jenis_pengiriman = new jenis_pengiriman;
		$jenisbarang = new jenisbarang;
		$jenispackaging = new jenispackaging;
		$kurir = new kurir;
		$petugas = new petugas;
		$wilayah = new wilayah;
		return view('pengiriman.tambah', compact('jenis_pengiriman', 'jenisbarang', 'jenispackaging', 'kurir', 'petugas', 'wilayah'));
	}	
    public function simpan(Request $input)
	{
		$pengiriman = new pengiriman($input->only('id_jp', 'kd_jenis_barang', 'kd_jenis_packaging', 'id_kurir', 'id_petugas', 'id_wilayah', 'nama_pengirim', 'no_telp_pengirim', 'nama_penerima', 'alamat_penerima', 'no_telp_penerima', 'nama_barang', 'berat_barang', 'total_biaya'));
		if ($pengiriman->save()) $this->informasi = "Pengiriman Berhasil Disimpan";
		return redirect('pengiriman')->with(['informasi'=>$this->informasi]);
	}
	public function edit($id)
	{
		$pengiriman = pengiriman::find($id);
		$jenis_pengiriman = new jenis_pengiriman;
		$jenisbarang = new jenisbarang;
		$jenispackaging = new jenispackaging;
		$kurir = new kurir;
		$petugas = new petugas;
		$wilayah = new wilayah;
		return view('pengiriman.edit', compact('jenis_pengiriman','jenisbarang','jenispackaging', 'kurir', 'petugas', 'wilayah', 'pengiriman'));
	}
	public function lihat($id)
	{
		$pengiriman = pengiriman::find($id);
		return view('pengiriman.lihat')->with(array('pengiriman'=>$pengiriman));
	}
	public function update($id, Request $input)
	{
		$pengiriman = pengiriman::find($id);
		$pengiriman->fill($input->only('id_jp', 'kd_jenis_barang', 'kd_jenis_packaging', 'id_kurir', 'id_petugas', 'id_wilayah', 'nama_pengirim', 'no_telp_pengirim', 'nama_penerima', 'alamat_penerima', 'no_telp_penerima', 'nama_barang', 'berat_barang', 'total_biaya'));
		if($pengiriman->save()) $this->informasi = "Pengiriman Berhasil Diperbarui";
		return redirect('pengiriman')->with(['informasi'=>$this->informasi]);
		// $pengiriman = pengiriman::find($id);
		// $pengiriman->nama_pengirim = $input->nama_pengirim;
		// $pengiriman->no_telp_pengirim = $input->no_telp_pengirim;
		// $pengiriman->nama_penerima = $input->nama_penerima;
		// $pengiriman->alamat_penerima = $input->alamat_penerima;
		// $pengiriman->no_telp_penerima = $input->no_telp_penerima;
		// $pengiriman->nama_barang = $input->nama_barang;
		// $pengiriman->berat_barang = $input->berat_barang;
		// $pengiriman->total_biaya = $input->total_biaya;
		// $informasi = $pengiriman->save() ? 'Berhasil update data' : 'Gagal update data';
		// return redirect('pengiriman')->with(['informasi'=>$informasi]);
	}
	public function hapus($kd_pengiriman){
		$pengiriman = pengiriman::find($kd_pengiriman);
		$informasi = $pengiriman->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
		return redirect('pengiriman')->with(['informasi'=>$informasi]);
	}
}
