<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HanhTrinh extends Model
{
	protected $table = 'hanh_trinh';

	public $fillable = ['ma_hanh_trinh','ma_tau'];
}
