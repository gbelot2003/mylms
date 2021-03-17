<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function a_guess_user_cant_see_the_users()
    {
        $response = $this->get('/users');

        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function a_registered_user_can_see_the_users_page()
    {
        $this->actingAs(User::factory()->create());
        $response = $this->get('/users')
            ->assertStatus(200);
    }
}
