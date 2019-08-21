<?php
use App\Detalle_Devolucion_Venta;
use Illuminate\Database\Seeder;

class DetallesDevolucionesVentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Detalle_Devolucion_Venta::truncate();
        Detalle_Devolucion_Venta::create([
            'id_devolucion_venta' => 1,
            'id_producto' => 1,
            'cantidad_producto' => 5,
        ]);
        Detalle_Devolucion_Venta::create([
            'id_devolucion_venta' => 2,
            'id_producto' => 3,
            'cantidad_producto' => 10,
        ]);
        Detalle_Devolucion_Venta::create([
            'id_devolucion_venta' => 3,
            'id_producto' => 5,
            'cantidad_producto' => 15,
        ]);
    }
}
