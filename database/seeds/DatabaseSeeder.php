<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DetallesComprasTableSeeder::class);
        $this->call(DetallesDevolucionesComprasTableSeeder::class);
        $this->call(DetallesDevolucionesVentasTableSeeder::class);
        $this->call(DetallesVentasTableSeeder::class);
        $this->call(PagosClientesTableSeeder::class);
        $this->call(PagosProveedoresTableSeeder::class);
    }
}
