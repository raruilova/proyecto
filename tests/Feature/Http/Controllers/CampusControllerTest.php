<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Campus;
use App\User;

class CampusControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_campus_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $campus = factory(Campus::class)->make();
        $data = $campus->attributesToArray();
        $response = $this->post(route('campuses.store'), $data);
        $response->assertRedirect(route('campuses.index'));
        $response->assertSessionHas('status', 'Campus created!');
    }

    /**
     * @test
     */
    public function it_updates_campus_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $campus = factory(Campus::class)->create();
        $data = factory(Campus::class)->make()->attributesToArray();
        $response = $this->put(route('campuses.update', ['campus' => $campus]), $data);
        $response->assertRedirect(route('campuses.index'));
        $response->assertSessionHas('status', 'Campus updated!');
    }

    /**
     * @test
     */
    public function it_destroys_campus_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $campus = factory(Campus::class)->create();
        $response = $this->delete(route('campuses.destroy', ['campus' => $campus]));
        $response->assertRedirect(route('campuses.index'));
        $response->assertSessionHas('status', 'Campus destroyed!');
    }
}
