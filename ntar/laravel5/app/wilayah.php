<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    protected $table = 'wilayah';
	protected $fillable = ['nama_wilayah','harga'];
	protected $guarded = ['id_wilayah'];

	public function pengiriman(){
		return $this->hasMany(pengiriman::class);
	}
}
