<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductoRequest;

class ProductoController extends Controller
{
    function __construct() {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $catalogo = \DB::table('productos')->get();
        // return view('productos.index', compact('catalogo'));
        return view('productos.index', [
            'productos' => Producto::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductoRequest $request) {
        // Guardar el producto
        DB::table('productos')->insert([
        'nombre' => $request->input('nombre'),
        'precio' => $request->input('precio'),
        'iva' => $request->input('iva'),
        'cantidad_disponible' => $request->input('cantidad_disponible'),
        'cantidad_minima' => $request->input('cantidad_disponible'),
        'cantidad_maxima' => $request->input('cantidad_disponible'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        'id_presentacion_producto' => $request->input('id_presentacion_producto'),
        'id_categoria_producto' => $request->input('id_categoria_producto'),
        ]);
        return redirect()->route('producto.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = DB::table('productos')->where('id_producto',
                            $id)->first();
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = DB::table('productos')->where('id_producto', $id)->first();
        return view('productos.editar', compact('producto'));
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
        DB::table('productos')->where('id_producto',$id)->update([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'iva' => $request->input('iva'),
            'cantidad_disponible' => $request->input('cantidad_disponible'),
            'cantidad_minima' => $request->input('cantidad_minima'),
            'cantidad_maxima' => $request->input('cantidad_maxima'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'id_presentacion_producto' => $request->input('id_presentacion_producto'),
            'id_categoria_producto' => $request->input('id_categoria_producto'),
        ]);
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('productos')->where('id_producto', $id)->delete();
        return redirect()->route('producto.index');
    }
}
