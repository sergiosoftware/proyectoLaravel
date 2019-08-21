<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\CreateVentaRequest;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ventas.index', [
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
        return view('ventas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVentaRequest $request) {
        // Guardar la venta
        DB::table('ventas')->insert([
        'fecha_venta' => $request->input('fecha_venta'),
        'total_credito' => $request->input('total_credito'),
        'total_contado' => $request->input('total_contado'),
        'id_cliente' => $request->input('id_cliente'),
        'id_vendedor' => $request->input('id_vendedor'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('venta.index');
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
        $venta = DB::table('ventas')->where('id_venta',
                            $id)->first();
        return view('ventas.show', compact('venta'));
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
        $venta = DB::table('ventas')->where('id_venta', $id)->first();
        return view('ventas.editar', compact('venta'));
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
        DB::table('ventas')->where('id_venta',$id)->update([
            'fecha_venta' => $request->input('fecha_venta'),
            'total_credito' => $request->input('total_credito'),
            'total_contado' => $request->input('total_contado'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('venta.index');
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
        DB::table('ventas')->where('id_venta', $id)->delete();
        return redirect()->route('venta.index');
    }
}
