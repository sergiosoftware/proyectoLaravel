<?php
use App\Detalle_Venta;
use Illuminate\Database\Seeder;

class DetallesVentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Detalle_Venta::truncate();
        Detalle_Venta::create([
            'cantidad_producto' => 10,
            'valor_producto' => 1100,
            'descuento' => 10,
            'iva' => 2,
            'id_venta' => 1,
            'id_producto' => 2,
        ]);
        Detalle_Venta::create([
            'cantidad_producto' => 15,
            'valor_producto' => 8000,
            'descuento' => 20,
            'iva' => 4,
            'id_venta' => 2,
            'id_producto' => 4,
        ]);
        Detalle_Venta::create([
            'cantidad_producto' => 20,
            'valor_producto' => 50000,
            'descuento' => 30,
            'iva' => 6,
            'id_venta' => 3,
            'id_producto' => 6,
        ]);
    }
}
