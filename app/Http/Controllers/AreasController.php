<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use DB;
class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $areas = Area::all();
        $areas = Area::Buscar($request->NOMBRE_AREA)->orderBy('COD_AREA')->paginate(10);
        return view('area.lista',['areas'=> $areas ]);
    }
//search, replace, subjec
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p=Area::where('COD_AREA','=',$request->COD_AREA)->first();
        $q=Area::where('NOMBRE_AREA','=',$request->NOMBRE_AREA)->first();
        if($p==null&&$q==null)
        {
            Area::create($request->all());
            return redirect('area');
        }
        else
        {
            return redirect('area');
        }
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
        $areas = Area::findOrFail($id);
        return view('area.edit',['area'=>$areas]);
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
        Area::findOrFail($id)->update($request->all());
        return redirect('area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Area::findOrFail($id)->delete();
        return redirect('area');
    }

    public function ocultar($id)
    {
        Area::findOrFail($id)->delete();
        return redirect('area');
    }
}
