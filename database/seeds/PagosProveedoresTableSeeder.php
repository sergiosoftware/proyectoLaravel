<?php
use App\Pago_Proveedor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PagosProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pago_Proveedor::truncate();
        Pago_Proveedor::create([
            'id_proveedor' => "10",
            'valor_pago' => 200000,
            'fecha_pago' => Carbon::now(),
        ]);
        Pago_Proveedor::create([
            'id_proveedor' => "30",
            'valor_pago' => 400000,
            'fecha_pago' => Carbon::now(),
        ]);
        Pago_Proveedor::create([
            'id_proveedor' => "50",
            'valor_pago' => 600000,
            'fecha_pago' => Carbon::now(),
        ]);
    }
}
