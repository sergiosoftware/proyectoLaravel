<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Personal;
use App\User;
use App\Producto;
use App\Venta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('consultas.indexPersonal', [
            'personals' => Personal::latest()->paginate(3)
        ]);
    }

    public function index1()
    {
        //
        return view('consultas.indexProductos', [
            'productos' => Producto::latest()->paginate(3)
        ]);
    }

    public function index2()
    {
        //
        return view('consultas.indexUsuarios', [
            'usuarios' => User::latest()->paginate(3)
        ]);
    }

    public function index3()
    {
        //
        return view('consultas.indexVentas', [
            'ventas' => Venta::latest()->paginate(3)
        ]);
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
        //
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
