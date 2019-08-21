<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\CreateClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clientes.index', [
            'clientes' => Cliente::latest()->paginate(3)
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
        return view('clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClienteRequest $request)
    {
        // Guardar el cliente
        DB::table('clientes')->insert([
            'id_cliente' => $request->input('id_cliente'),
            'nombre' => $request->input('nombre'),
            'telefonos' => $request->input('telefonos'),
            'direccion' => $request->input('direcion'),
            'con_credito' => $request->input('con_credito'),
        ]);
        return redirect()->route('cliente.index');
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
        $cliente = DB::table('clientes')->where('id_cliente', 
                        $id)->first();
        return view('clientes.show', compact('cliente'));
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
        $cliente = DB::table('clientes')->where('id_cliente', $id)->first();
        return view('clientes.editar', compact('cliente'));
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
        DB::table('clientes')->where('id_cliente',$id)->update([
            'id_cliente' => $request->input('id_cliente'),
            'nombre' => $request->input('nombre'),
            'telefonos' => $request->input('telefonos'),
            'direccion' => $request->input('direcion'),
            'con_credito' => $request->input('con_credito'),
        ]);
        return redirect()->route('cliente.index');
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
        DB::table('clientes')->where('id_cliente', $id)->delete();
        return redirect()->route('cliente.index');
    }
}
