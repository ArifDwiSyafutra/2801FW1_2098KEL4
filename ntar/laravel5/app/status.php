<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = 'status';
	protected $fillable = ['nama_status'];
	protected $guarded = ['id'];

	public function statuspengiriman(){
		return $this->hasMany(statuspengiriman::class);
	}
}
