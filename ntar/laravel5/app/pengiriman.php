<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    protected $table = 'pengiriman';
	protected $fillable = ['nama_pengirim','no_telp_pengirim', 'nama_penerima', 'alamat_penerima', 'no_telp_penerima', 'nama_barang', 'berat_barang', 'total_biaya'];
	protected $guarded = ['kd_pengiriman'];

	public function statuspengiriman(){
		return $this->hasMany(statuspengiriman::class);
	}
	public function jenisbarang(){
		return $this->belongsTo(jenisbarang::class, 'kd_jenis_barang');
	}

	public function jenispackaging(){
		return $this->belongsTo(jenispackaging::class, 'kd_jenis_packaging');
	}

	public function jenis_pengiriman(){
		return $this->belongsTo(jenis_pengiriman::class, 'id_jp');
	}

	public function kurir(){
		return $this->belongsTo(kurir::class, 'id_kurir');
	}

	public function petugas(){
		return $this->belongsTo(petugas::class, 'id_petugas');
	}

	public function wilayah(){
		return $this->belongsTo(wilayah::class, 'id_wilayah');
	}
}
