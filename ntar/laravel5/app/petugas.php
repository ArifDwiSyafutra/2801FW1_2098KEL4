<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    protected $table = 'petugas';
	protected $fillable = ['nama_petugas'];
	protected $guarded = ['id_petugas'];

	public function pengiriman(){
		return $this->hasMany(pengiriman::class);
	}

		    public function admin() {
    	return $this->belongsTo(Admin::class);
    }

}
