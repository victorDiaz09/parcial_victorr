<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'id_nota'=> '1',
            'nota1'=> '8.5',
            'nota2'=> '5',
            'nota3'=> '4',
            'nota4'=> '10',
            'promedio'=> '7.8',
            'parcial'=> '7.0',
            'id_alumno'=> 'S1',
            'id_cursos'=> '1',
            'id_profesor'=> '1'

        ]);
    }
}
