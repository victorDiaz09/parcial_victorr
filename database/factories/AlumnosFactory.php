<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name' => 'victor',
        'apellido' => 'andres',
        'fecha_nacimiento' => '20/07/2000',
        'direccion' => 'rosario de mora',
        'genero' => 'M',
        'telefono' => '74518248',
        'email' => 'victo.dj200015@gmail.com',
        'password' => bcrypt('1234')
    ];
});
