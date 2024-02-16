<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Medico;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(CoberturaMedicaSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(MedicoSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(ConsultaMedicaSeeder::class);
        $this->call(TipoEstudioSeeder::class);
        $this->call(MedicoPacienteSeeder::class);
        $this->call(PacienteTipoEstudioSeeder::class);

      
        
    }
}
