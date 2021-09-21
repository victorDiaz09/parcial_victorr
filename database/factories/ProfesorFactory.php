<?php

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'name' => 'jorge',
        'apellido' => 'coto',
        'dui' => '060788124-8',
        'telefono' => '22145812',
        'email'=> 'jcoto.07@gmail.com',
        'password'=> bcrypt('1234')
    ];
});
