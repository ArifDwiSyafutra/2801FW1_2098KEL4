<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenisbarang extends Model
{
    protected $table = 'jenisbarang';
	protected $fillable = ['nama_jenis_barang'];
	protected $guarded = ['kd_jenis_barang'];

	public function pengiriman(){
		return $this->hasMany(pengiriman::class);
	}
}
