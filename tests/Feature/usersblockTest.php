<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\DB;

class usersblockTest extends TestCase
{
    use RefreshDatabase;
              /** @test */
              public function list_empty_users_test()
              {
                  DB::table('users')->truncate();
    
                  $this->get('/usuarios')
                  ->assertStatus(200)
                  ->assertSee('No hay usuarios registrados')
                  ;
              }

    /** @test */
    public function list_users_test()
    {
        factory(User::class)->create(['name'=>'Jose Alvarado']);

        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Estos son los usuarios registrados en la base de datos:')
        ->assertSee('Jose Alvarado')
        ;
    }

      /** @test */
      public function show_if_user_isnot_found()
      {
          $this->get('/usuarios/detalles/999')
          ->assertStatus(404)
          ->assertSee('Página no encontrada')
          ;
      }

        /** @test */
        public function validate_name_notnull()
        {
            $this->from('/usuario_nuevo')->post('/usuario_nuevo',[
                'email'=>'jgarcia@qb.mx',
                'password'=>'123456',
            ])->assertRedirect('/usuario_nuevo')
            ->assertSessionHasErrors(['name']);

            $this->assertEquals(0,User::count());;
           /*  $this->assertDatabaseMissing('users',['email'=>'jgarcia@qb.mx']); */
        }

/** @test */
    public function cargar_editar_usuario(){
       // $this->withoutExceptionHandling();
        $user=factory(User::class)->create();
    
        $this->get("/usuarios/{$user->id}/editar")
        ->assertStatus(200)
        ->assertViewIs('edit_users');
    }

    /** @test */
    public function update_usuario(){
      $this->withoutExceptionHandling();
        $user=factory(User::class)->create();

        $this->from("usuarios/detalles/{$user->id}/editar")
        ->put("usuarios/{$user->id}",[
            'name'=>'Juancho',
            'email' => 'juancho@gmail.com',
            'password'=> '1234567',
        ])->assertRedirect("/usuarios");

        $this->assertCredentials([
        'name'          =>  'Juancho',
        'email'         =>  'juancho@gmail.com',
        'password'      =>  '1234567',
        ]);
    }


    /** @test */
    public function validate_pass_optional()
    {
       // $this->withoutExceptionHandling();
        $user=factory(User::class)->create([
            'password'=> bcrypt('123456a')
        ]);

        $this->from("usuarios/detalles/{$user->id}/editar")
        ->put("usuarios/{$user->id}",[
        'name'      =>'Juancho',
        'email'     => 'juancho@gmail.com',
        'password'  => '',
        ])->assertRedirect("usuarios");

        $this->assertCredentials([
        'name'      =>'Juancho',
        'email'     => 'juancho@gmail.com',
        'password'  => '123456a'
        ]);
    }   
    
     /** @test */
    public function it_deletes_users()
    {
        $this->withoutExceptionHandling();
        $user= factory(User::class)->create();

        $this->delete("/usuarios/{$user->id}")
        ->assertRedirect('/usuarios');

        $this->assertSame(0, User::count());
    }
     
}