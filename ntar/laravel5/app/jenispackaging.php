<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenispackaging extends Model
{
    protected $table = 'jenispackaging';
	protected $fillable = ['nama_jenis_packaging','harga'];
	protected $guarded = ['kd_jenis_packaging'];

	public function pengiriman(){
		return $this->hasMany(pengiriman::class);
	}
}
