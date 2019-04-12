<?php
use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // $prof=DB::select('SELECT id FROM professions WHERE title=? LIMIT 0,1', ['Desarrollador Back-end']);
       // dd($prof);
       
        //$prof=DB::table('professions')->select('id')->take(1)->get();

        //$prof=DB::table('professions')->select('id')->first()->id;
        $professionid=Profession::where('title','=','Desarrollador Back-end')->value('id');
        
        User::create([
            'name'=>'Juan Garcia',
            'email'=>'jgarcia@quantumbit.mx',
            'password'=>bcrypt('laravel'),
            'profession_id'=>$professionid,
        ]);
        User::create([
            'name'=>'Jorge Villalobos',
            'email'=>'jvillalobos@quantumbit.mx',
            'password'=>bcrypt('laravel'),
        ]);

        factory(User::class,8)->create();

        //DB::table('users')->insert([
        //'name'=>'Jorge Villalobos',
        //'email'=>'jvillalobos@quantumbit.mx',
        //'password'=>bcrypt('laravel'),
        //]); 
    }
}
