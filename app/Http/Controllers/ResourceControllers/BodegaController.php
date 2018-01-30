<?php

namespace App\Http\Controllers\ResourceControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodegas = \App\Bodega::all();
        
        return $bodegas;
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
        
        
        $nuevaBodega = new \App\Bodega();
        
        $nuevaBodega->nombre = $request->input('nom');
        $nuevaBodega->save();
        
        
        return $nuevaBodega;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bodega = \App\Bodega::find($id);
        
        return $bodega;
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
        $bodega = \App\Bodega::find($id);
        $bodega->nombre = $request->input("nombre");
        
        $bodega->save();
        
        return $bodega;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bodega = \App\Bodega::find($id);
        $bodega->delete();
        return $bodega;
    }
}
