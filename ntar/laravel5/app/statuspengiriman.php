<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statuspengiriman extends Model
{
    protected $table = 'statuspengiriman';
	protected $fillable = ['status_id','pengiriman_kd'];
	protected $guarded = ['id'];

	public function pengiriman(){
		return $this->belongsTo(pengiriman::class, 'pengiriman_kd');
	}

	public function status(){
		return $this->belongsTo(status::class, 'status_id');
	}
}
