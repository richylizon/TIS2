<?php

namespace App\Http\Controllers;

use App\Gestion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class GestionController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gestion::all();
        $data = Gestion::paginate(15);
        return view('gestion.lista',['gestions'=> $data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $now = Carbon::now();
        return view('gestion.registrar')->with(compact('now','now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gestion::create($request->all());
        return redirect('gestion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $modalidades
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $modalidades
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $now = Carbon::now();
        $gestion = Gestion::findOrFail($id);
        return view('gestion.edit',[
            'gestion'=>$gestion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $modalidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Gestion::findOrFail($id)->update($request->all());
        return redirect('gestion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $modalidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
        Gestion::findOrFail()->delete($id);
        return redirect('gestion');**/
    }

    public function ocultar($id)
    {   /**
        Gestion::findOrFail($id)->delete();
        return redirect('gestion');**/
    }
}
