<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageModel;
use App\Tau;


class TauController extends Controller
{   

    public function __construct( Request $request, ManageModel $manage)
    {
        $this->request = $request;
        $this->manage = $manage;

    }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['taus'] = $this->manage->getTau();
        // $data['toas'] = $this->manage->getToa();

        return view('manage/tau/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage/tau/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tau = new Tau;

        $tau->ten_tau = $request->ten_tau;
        $tau->ma_tau = $request->ma_tau;
        $tau->loai_tau = $request->loai_tau;
        $tau->save();

        return  redirect()->route('tau.index');
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
