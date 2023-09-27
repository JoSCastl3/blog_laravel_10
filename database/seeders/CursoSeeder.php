<?php

namespace Database\Seeders;

use App\Models\curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $curso=new curso();
        // $curso->name="Larave";
        // $curso->descripcion="El mejor framework de PHP";
        // $curso->categoria="Desarollo web";
        // $curso->save();

        // $curso1=new curso();
        // $curso1->name="Larave";
        // $curso1->descripcion="El mejor framework de PHP";
        // $curso1->categoria=s"Desarollo web";
        // $curso1->save();

        // //etc etc
        Curso::factory(50)->create();
    }
}
