<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\User;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_user_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $user = factory(User::class)->make();
        $data = $user->attributesToArray();
        $response = $this->post(route('users.store'), $data);
        $response->assertRedirect(route('users.index'));
        $response->assertSessionHas('status', 'User created!');
    }

    /**
     * @test
     */
    public function it_updates_user_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $user = factory(User::class)->create();
        $data = factory(User::class)->make()->attributesToArray();
        $response = $this->put(route('users.update', ['user' => $user]), $data);
        $response->assertRedirect(route('users.index'));
        $response->assertSessionHas('status', 'User updated!');
    }

    /**
     * @test
     */
    public function it_destroys_user_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $user = factory(User::class)->create();
        $response = $this->delete(route('users.destroy', ['user' => $user]));
        $response->assertRedirect(route('users.index'));
        $response->assertSessionHas('status', 'User destroyed!');
    }
}
