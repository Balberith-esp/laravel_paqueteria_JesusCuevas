<?php

namespace Database\Seeders;
use App\Models\Empresa;
use App\Models\Paquete;

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
        Empresa::factory(10)->create();
        $this->call(TransportistaSeeder::class);
        Paquete::factory(30)->create();

    }
}
