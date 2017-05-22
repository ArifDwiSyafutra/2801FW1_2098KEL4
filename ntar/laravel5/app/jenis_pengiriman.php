<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_pengiriman extends Model
{
    protected $table = 'jenis_pengiriman';
	protected $fillable = ['nama_jp','harga'];
	protected $guarded = ['id'];

	public function pengiriman(){
		return $this->hasMany(pengiriman::class);
	}
		/*public function list(){
			$out = [];
			foreach ($this->all() as $jenis_pengiriman) {

				$out[$jenis_pengiriman->id] = "{$jenis_pengiriman->nama_jp} ({$jenis_pengiriman ->harga})";
			}
			return $out;*/

}
