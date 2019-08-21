<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Personal;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePersonalRequest;
use Illuminate\Support\Facades\Cache;

class PersonalController extends Controller
{
    /**
     * Agregar el constructor para el manejo de las sesiones
     * @return 
    //  */
    // function __construct() {
    //     $this->middleware('auth', ['except' => ['create', 'store']]);
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('personals.index', [
            'personals' => Personal::latest()->paginate(3)
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
        return view('personals.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePersonalRequest $request) {
        // Guardar el producto
        DB::table('personal')->insert([
        'id_persona' => $request->input('id_persona'),
        'nombre' => $request->input('nombre'),
        'telefono' => $request->input('telefono'),
        'direccion' => $request->input('direccion'),
        'perfil' => $request->input('perfil'),
        'contrasena' => $request->input('contrasena'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = DB::table('personal')->where('id_persona',
                            $id)->first();
        return view('personals.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = DB::table('personal')->where('id_persona', $id)->first();
        return view('personals.editar', compact('personal'));
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
        DB::table('personal')->where('id_persona',$id)->update([
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'perfil' => $request->input('perfil'),
            'contrasena' => $request->input('contrasena'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('personals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('personal')->where('id_persona', $id)->delete();
        return redirect()->route('personal.index');
    }
}
