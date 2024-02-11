<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ConsultaMedicaMedicoSeeder::class);
        $this->call(ConsultaMedicapacienteSeeder::class);
        $this->call(CoverturaMedicaSeeder::class);
        $this->call(EspecialidadMedicoSeeder::class);
        $this->call(MedicoSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(EspecialidadSeeder::class);



    }
}
