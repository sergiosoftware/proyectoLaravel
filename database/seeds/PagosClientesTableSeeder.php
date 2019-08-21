<?php
use App\Pago_Cliente;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PagosClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pago_Cliente::truncate();
        Pago_Cliente::create([
            'id_cliente' => "25100125",
            'valor_pago' => 300000,
            'fecha_pago' => Carbon::now(),
        ]);
        Pago_Cliente::create([
            'id_cliente' => "1053729051",
            'valor_pago' => 500000,
            'fecha_pago' => Carbon::now(),
        ]);
        Pago_Cliente::create([
            'id_cliente' => "1060873201",
            'valor_pago' => 700000,
            'fecha_pago' => Carbon::now(),
        ]);
    }
}
