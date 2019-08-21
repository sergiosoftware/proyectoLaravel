<?php
use App\Detalle_Devolucion_Compra;
use Illuminate\Database\Seeder;

class DetallesDevolucionesComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Detalle_Devolucion_Compra::truncate();
        Detalle_Devolucion_Compra::create([
            'id_devolucion_compra' => 1,
            'id_producto' => 2,
            'cantidad_producto' => 10,
        ]);
        Detalle_Devolucion_Compra::create([
            'id_devolucion_compra' => 2,
            'id_producto' => 4,
            'cantidad_producto' => 5,
        ]);
        Detalle_Devolucion_Compra::create([
            'id_devolucion_compra' => 3,
            'id_producto' => 6,
            'cantidad_producto' => 15,
        ]);
    }
}
