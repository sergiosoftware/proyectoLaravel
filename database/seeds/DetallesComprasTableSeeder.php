<?php
use App\Detalle_Compra;
use Illuminate\Database\Seeder;

class DetallesComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Detalle_Compra::truncate();
        Detalle_Compra::create([
            'cantidad_pedida' => 10,
            'cantidad_recibida' => 10,
            'valor_producto' => 1000,
            'iva' => 2,
            'id_compra' => 1,
            'id_producto' => 1,
        ]);
        Detalle_Compra::create([
            'cantidad_pedida' => 20,
            'cantidad_recibida' => 15,
            'valor_producto' => 1200,
            'iva' => 3,
            'id_compra' => 3,
            'id_producto' => 3,
        ]);
        Detalle_Compra::create([
            'cantidad_pedida' => 30,
            'cantidad_recibida' => 20,
            'valor_producto' => 5000,
            'iva' => 4,
            'id_compra' => 5,
            'id_producto' => 5,
        ]);
    }
}
