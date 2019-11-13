<?php

use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'Andres',
            'apellido'=>'Rojas',
            'email' => 'rojas@ikzubirimanteo.com',
            'telefono'=>'632004500',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Carlos',
            'apellido'=>'Perez',
            'email' => 'perez@ikzubirimanteo.com',
            'telefono'=>'632350000',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Jafein',
            'apellido'=>'Figueroa',
            'email' => 'jefrymofi13@ikzubirimanteo.com',
            'telefono'=>'632000980',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Henrry',
            'apellido'=>'Molina',
            'email' => 'henrry@ikzubirimanteo.com',
            'telefono'=>'632000009',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Aitor',
            'apellido'=>'ortiz',
            'email' => 'aitor@ikzubirimanteo.com',
            'telefono'=>'632120000',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Koldo',
            'apellido'=>'Intxausti',
            'email' => 'koldo@ikzubirimanteo.com',
            'telefono'=>'632340000',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'iñaki',
            'apellido'=>'Ochoa',
            'email' => 'iñaki@ikzubirimanteo.com',
            'telefono'=>'632000450',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Ruben',
            'apellido'=>'Cruz',
            'email' => 'ruben@ikzubirimanteo.com',
            'telefono'=>'632006300',
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Federico',
            'apellido'=>'Peluche',
            'email' => 'federico@ikzubirimanteo.com',
            'telefono'=>'632006300',
        ]);
    }
}