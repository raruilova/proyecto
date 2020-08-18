<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\User;
use Laravel\Passport\Passport;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_user_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/users']);
        $user = factory(User::class)->make();
        $data = $user->attributesToArray();
        $response = $this->json('POST','api/users',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_user_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/users']);
        $user = factory(User::class)->create();
        $data = factory(User::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/users/'.$user->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_user_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/users']);
        $user = factory(User::class)->create();
        $response = $this->json('DELETE','api/users/'.$user->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $user->refresh();
        $this->assertDatabaseMissing('users',['id' => $user->id]);

    }
}
