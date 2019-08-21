<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Personal;
use App\User;
use App\Producto;
use App\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        // return view('consultas.indexPersonal', [
        //     'personals' => Personal::latest()->paginate(3)
        // ]);
        $key = "personals.pagina." . request('page', 1);

        if (Cache::has($key)) {
            $personals = Cache::get($key);
        } else {
            $personals = Personal::with([
            ])->orderBy('created_at', request('orden', 'ASC'))
                ->paginate(3);

            Cache::put($key, $personals, 600); // guardar por 10 minutos
        }
        return view('consultas.indexPersonal', compact('personals'));
    }

    public function index1()
    {
        //
        // return view('consultas.indexProductos', [
        //     'productos' => Producto::latest()->paginate(3)
        // ]);
        $key = "productos.pagina." . request('page', 1);

        if (Cache::has($key)) {
            $productos = Cache::get($key);
        } else {
            $productos = Producto::with([
            ])->orderBy('created_at', request('orden', 'ASC'))
                ->paginate(3);

            Cache::put($key, $productos, 600); // guardar por 10 minutos
        }
        return view('consultas.indexProductos', compact('productos'));
    }

    public function index2()
    {
        //
        // return view('consultas.indexUsuarios', [
        //     'usuarios' => User::latest()->paginate(3)
        // ]);
        $key = "usuarios.pagina." . request('page', 1);

        if (Cache::has($key)) {
            $usuarios = Cache::get($key);
        } else {
            $usuarios = User::with([
            ])->orderBy('created_at', request('orden', 'ASC'))
                ->paginate(3);

            Cache::put($key, $usuarios, 600); // guardar por 10 minutos
        }
        return view('consultas.indexUsuarios', compact('usuarios'));
    }

    public function index3()
    {
        //
        // return view('consultas.indexVentas', [
        //     'ventas' => Venta::latest()->paginate(3)
        // ]);
        $key = "ventas.pagina." . request('page', 1);

        if (Cache::has($key)) {
            $ventas = Cache::get($key);
        } else {
            $ventas = Venta::with([
            ])->orderBy('created_at', request('orden', 'ASC'))
                ->paginate(3);

            Cache::put($key, $ventas, 600); // guardar por 10 minutos
        }
        return view('consultas.indexVentas', compact('ventas'));
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
