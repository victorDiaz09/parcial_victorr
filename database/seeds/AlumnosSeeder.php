<?php

use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumnos::class,18)->create();
        Alumnos::create(
            [
            'id_alumno'=> '1',
            'name'=> 'victor',
            'apellido'=> 'andres',
            'fecha_nacimiento'=> '20/07/2000',
            'direccion'=> 'rosario de mora',
            'genero'=> 'M',
            'apellido'=> 'andres',
            'telefono'=> '74518248',
            'email'=> 'victor.dj200015@gmail.com',
            'password'=> bcrypt('1234')
            
             ]
        );
    }
}
