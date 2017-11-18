<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageModel;
use Illuminate\Support\Facades\DB;
use App\HanhTrinh;

class DatVeController extends Controller
{	
	public function __construct( Request $request, ManageModel $manage)
	{
		$this->request = $request;
		$this->manage = $manage;

	}
	public function tracuu()
	{	
		$data['taus'] = $this->manage->getTau();
		$data['ga_dis'] = $this->manage->getGaDi();
		$data['ga_dens'] = $this->manage->getGaDen();
		return view('manage/dat_ve/tra_cuu',$data);
	}
	public function datve()
	{
		return view('manage/dat_ve/dat_ve');
	}
}
