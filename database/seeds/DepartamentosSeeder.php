<?php

use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('departamentos')->insert([
            'nombre' => 'Informatica',
        ]);

       DB::table('departamentos')->insert([
            'nombre' => 'Gestion Administrativa',
        ]);

       DB::table('departamentos')->insert([
            'nombre' => 'Gastronomia',
        ]);

       DB::table('departamentos')->insert([
            'nombre' => 'Informatica',
        ]);

       DB::table('departamentos')->insert([
            'nombre' => 'Finanzas',
        ]);

       DB::table('departamentos')->insert([
            'nombre' => 'Gastronomia',
        ]);
    }
}
