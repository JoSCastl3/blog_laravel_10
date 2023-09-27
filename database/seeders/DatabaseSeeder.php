<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(CursoSeeder::class); Ya no es necesario tenerlo así, ahora con factories se trabaja
        Curso::factory(50)->create();
        User::factory(50)->create();
    }
}
