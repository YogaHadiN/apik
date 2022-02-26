<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Coa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CoaController
 */
class CoaControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $coas = Coa::factory()->count(3)->create();

        $response = $this->get(route('coa.index'));

        $response->assertOk();
        $response->assertViewIs('coa.index');
        $response->assertViewHas('coas');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('coa.create'));

        $response->assertOk();
        $response->assertViewIs('coa.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CoaController::class,
            'store',
            \App\Http\Requests\CoaStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $coa = $this->faker->word;

        $response = $this->post(route('coa.store'), [
            'coa' => $coa,
        ]);

        $coas = Coa::query()
            ->where('coa', $coa)
            ->get();
        $this->assertCount(1, $coas);
        $coa = $coas->first();

        $response->assertRedirect(route('coa.index'));
        $response->assertSessionHas('coa.id', $coa->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $coa = Coa::factory()->create();

        $response = $this->get(route('coa.show', $coa));

        $response->assertOk();
        $response->assertViewIs('coa.show');
        $response->assertViewHas('coa');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $coa = Coa::factory()->create();

        $response = $this->get(route('coa.edit', $coa));

        $response->assertOk();
        $response->assertViewIs('coa.edit');
        $response->assertViewHas('coa');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CoaController::class,
            'update',
            \App\Http\Requests\CoaUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $coa = Coa::factory()->create();
        $coa = $this->faker->word;

        $response = $this->put(route('coa.update', $coa), [
            'coa' => $coa,
        ]);

        $coa->refresh();

        $response->assertRedirect(route('coa.index'));
        $response->assertSessionHas('coa.id', $coa->id);

        $this->assertEquals($coa, $coa->coa);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $coa = Coa::factory()->create();

        $response = $this->delete(route('coa.destroy', $coa));

        $response->assertRedirect(route('coa.index'));

        $this->assertDeleted($coa);
    }
}
