<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Campus;
use App\User;
use Laravel\Passport\Passport;

class CampusControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_campus_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/campuses']);
        $campus = factory(Campus::class)->make();
        $data = $campus->attributesToArray();
        $response = $this->json('POST','api/campuses',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_campus_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/campuses']);
        $campus = factory(Campus::class)->create();
        $data = factory(Campus::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/campuses/'.$campus->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_campus_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/campuses']);
        $campus = factory(Campus::class)->create();
        $response = $this->json('DELETE','api/campuses/'.$campus->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $campus->refresh();
        $this->assertSoftDeleted('campuses',['id' => $campus->id]);

    }
}
