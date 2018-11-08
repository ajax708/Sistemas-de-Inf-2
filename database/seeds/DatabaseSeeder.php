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
         $this->call(AdminUserSeeder::class);
         $this->call(LaboratorioClinicoSeeder::class);
         $this->call(PacienteSeeder::class);
         $this->call(MedicoSeeder::class);
         $this->call(EmpleadoSeeder::class);
         $this->call(EstablecimientoSeeder::class);
         $this->call(AseguradoraSeguroSeeder::class);
         $this->call(AnalisisSeeder::class);
    }
}
