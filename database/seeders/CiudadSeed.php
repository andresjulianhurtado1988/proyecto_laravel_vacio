<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('ciudades')->insert(
            array(
                array(
                    'ciudad' => 'Medellín',
                ),
                array(
                    'ciudad' => 'Envigado',
                ),
                array(
                    'ciudad' => 'La Estrella',
                ),
                array(
                    'ciudad' => 'Sabaneta',
                ),
                array(
                    'ciudad' => 'Caldas',
                ),

            )
        );
    }
}
