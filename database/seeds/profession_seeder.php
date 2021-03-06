<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profession_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    //    DB::insert('INSERT INTO professions (title) VALUES (:title)', ['title'=>'Desarrollador back-end']);
        Profession::create([
            'title' => 'Desarrollador Back-end',
        ]);
        Profession::create([
            'title' => 'Desarrollador Front-end',
        ]);
        Profession::create([
            'title' => 'Programador',
        ]);

        factory(Profession::class,7)->create();

        //DB::table('professions')->insert([
        //    'title' => 'Desarrollador Back-end',
        //]);
        //DB::table('professions')->insert([
        //    'title' => 'Desarrollador Front-end',
        //]);
        //DB::table('professions')->insert([
        //    'title' => 'Programador',
        //]);
    }
}
