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
        public function validate_users_info()
        {
                 $this->from('/usuario_nuevo')->post('/usuario_nuevo',[
                'email'=>'jgarcia@qb.mx',
                'password'=>'123456',
            ])->assertRedirect('/usuario_nuevo')
            ->assertSessionHasErrors(['name']);

            $this->assertEquals(0,User::count());;
           /*  $this->assertDatabaseMissing('users',['email'=>'jgarcia@qb.mx']); */

        }

}
