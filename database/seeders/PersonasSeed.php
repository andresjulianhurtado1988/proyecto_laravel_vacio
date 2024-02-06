<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('personas')->insert(
            array(
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134440099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '313444002',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '313444002',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3133440099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3135440099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134440099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134740099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134140099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134440099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134460099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134442099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134740099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),
                array(
                    'nombre' => fake()->name(),
                    'edad' => mt_rand(20, 50),
                    'telefono' => '3134840099',

                    // 'email' => fake()->name() . '@correo.com'
                    // 'ciudad_id' => mt_rand(1, 5)

                ),


            )
        );
    }



}
