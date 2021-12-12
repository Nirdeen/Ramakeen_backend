<?php

namespace App\Http\Controllers;

use App\Models\hgz;
use Illuminate\Http\Request;
use Auth;
class HgzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hgz = Hgz::all();
        return view('hgz.index',['hgz'=>$hgz]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hgz::create([
            "email"=>$request['email'],
            "phone"=>$request['phone'],
            "el-5edma"=>$request['el-5edma'],
            "name"=>$request['name'],
            "address"=>$request['address'],
            "user_id" => auth()->id()



        ]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hgz  $hgz
     * @return \Illuminate\Http\Response
     */
    public function show(hgz $hgz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hgz  $hgz
     * @return \Illuminate\Http\Response
     */
    public function edit(hgz $hgz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hgz  $hgz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hgz $hgz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hgz  $hgz
     * @return \Illuminate\Http\Response
     */
    public function destroy(hgz $hgz)
    {
        //
    }
}
