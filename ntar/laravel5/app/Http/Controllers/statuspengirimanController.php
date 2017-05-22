<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\statuspengiriman;
use App\status;
use App\pengiriman;

class statuspengirimanController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];

	public function awal(){
    	$semuaStatusPengiriman = statuspengiriman::all();
    	return view('statuspengiriman.awal', compact('semuaStatusPengiriman'));
    }

	public function tambah(){
		$status = new status;
		$pengiriman = new pengiriman;
		return view('statuspengiriman.tambah', compact('status', 'pengiriman'));
	}

	public function simpan(Request $input){
		$statuspengiriman = new statuspengiriman($input->only('kd_pengiriman', 'id_status'));
		if ($statuspengiriman->save()) $this->informasi = "Status Pengiriman Berhasil Disimpan";
		return redirect('statuspengiriman')->with(['informasi'=>$this->informasi]);
	}

	public function edit($id){
		$statuspengiriman = statuspengiriman::find($id);
		$status = new status;
		$pengiriman = new pengiriman;
		return view('statuspengiriman.edit', compact('status','pengiriman', 'statuspengiriman'));
	}

	public function lihat($id){
		$statuspengiriman = statuspengiriman::find($id);
		return view('statuspengiriman.lihat', compact('statuspengiriman'));
	}

	public function update($id, Request $input){
		$statuspengiriman = statuspengiriman::find($id);
		$statuspengiriman->fill($input->only('kd_pengiriman', 'id_status'));
		if($statuspengiriman->save()) $this->informasi = "Status Pengiriman Berhasil Diperbarui";
		return redirect('statuspengiriman')->with(['informasi'=>$this->informasi]);
	}

	public function hapus($id){
		$statuspengiriman = statuspengiriman::find($id);
		if($statuspengiriman->delete()) $this->informasi = "Status Pengiriman Berhasil Dihapus";
		return redirect('statuspengiriman')->with(['informasi'=>$this->informasi]);
	}
}
