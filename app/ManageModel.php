<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ManageModel extends Model
{
    public function getTau(){
    	return DB::table('tau')->get();
    }

    // public function getToa(){
    // 	return DB::table('ghe')->get();
    // }


    // public function getHanhTrinh(){
    // 	return DB::table('hanhtrinh')->get();
    // }

    //  public function getVe(){
    // 	return DB::table('ve')->get();
    // }

    //  public function getKhach(){
    // 	return DB::table('khach')->get();
    // }



    //Quan lý hanh trinh

    public function getHanhTrinh(){
    	return DB::table('hanh_trinh')->get();
    }

    public function getChiTietHanhTrinh()
    {
    	return DB::table('hanh_trinh')
    	->join('tau','tau.ma_tau','hanh_trinh.ma_tau')
    	->join('ga_di','ga_di.id','hanh_trinh.ga_di')
    	->join('ga_den','ga_den.id','hanh_trinh.ga_den')
        ->select('hanh_trinh.id','hanh_trinh.ma_hanh_trinh','hanh_trinh.time_end','hanh_trinh.time_start','ga_di.name as ga_di', 'ga_den.name as ga_den','tau.ten_tau')
    	->get();
    }
    public function getGaDi(){
        return DB::table('ga_di')->get();
    }
    public function getGaDen(){
    	return DB::table('ga_den')->get();
    }

}
