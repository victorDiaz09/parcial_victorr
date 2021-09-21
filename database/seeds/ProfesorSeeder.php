<?php

use App\Profesor;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class,18)->create();
        DB::table('profesor')->insert([
            'id_profesor'=> '1',
            'name'=> 'jorge',
            'apellido'=> 'coto',
            'dui'=> '06075815-8',
            'telefono'=> '22154728',
            'email'=> 'jcoto.07@gmail.com',
            'password'=> bcrypt('1234')
        ]);
    }
}
