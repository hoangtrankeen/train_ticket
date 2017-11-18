<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageModel;
use Illuminate\Support\Facades\DB;
use App\HanhTrinh;

class HanhTrinhController extends Controller
{   

  public function __construct( Request $request, ManageModel $manage)
  {
    $this->request = $request;
    $this->manage = $manage;

    }/**
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['taus'] = $this->manage->getTau();
      
       $data['hanhtrinhs'] = $this->manage->getChiTietHanhTrinh();

       return view('manage/hanh_trinh/index',$data);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['taus'] = $this->manage->getTau();
        $data['ga_dis'] = $this->manage->getGaDi();
       $data['ga_dens'] = $this->manage->getGaDen();

       return view('manage/hanh_trinh/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request->all());
         $time_start = date('Y:m:d H:i:s',strtotime($request->time_start));
         $time_end = date('Y:m:d H:i:s',strtotime($request->time_end));

        $ht = new HanhTrinh;
        $ht->ma_hanh_trinh = $request->ma_hanh_trinh;
        $ht->ma_tau = $request->ma_tau;
        $ht->time_start = $request->time_start;
        $ht->time_end = $request->time_end;
        $ht->ga_di = $request->ga_di;
        $ht->ga_den = $request->ga_den;

        $ht->save();


        return redirect()->route('hanhtrinh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
