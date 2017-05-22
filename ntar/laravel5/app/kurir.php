<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kurir extends Model
{
    protected $table = 'kurir';
	protected $fillable = ['nama_kurir'];
	protected $guarded = ['id_kurir'];

	public function pengiriman(){
		return $this->hasMany(pengiriman::class);
	}
}
