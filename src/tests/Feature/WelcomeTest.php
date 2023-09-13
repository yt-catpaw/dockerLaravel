<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class WelcomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Documentation');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_ex()
    // {
    //     $data = [
    //         'name'                  => 'juno',
    //         'email'                 => 'juno@email.com',
    //         'password'              => 'test1234',
    //         'password_confirmation' => 'test1234',
    //     ];
    
    //     $response = $this->postJson(route('register'), $data);
    
    //     $response->assertStatus(302)
    //         ->assertRedirect('/dashboard');


    //     $this->assertDatabaseHas('users', [
    //         'name'    => 'juno',
    //         'email'   => 'juno@email.com',
    //     ]);
        
    // }


    /**
     * ダッシュボードのアクセステスト
     */
    public function testDashboard()
    {
        $user = User::factory()->create();
        $response = $this
            ->actingAs($user)
            ->get('/dashboard');

        $response->assertOk();
    }
}
