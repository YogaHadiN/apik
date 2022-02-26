<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\JenisTarif;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\JenisTarifController
 */
class JenisTarifControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $jenisTarifs = JenisTarif::factory()->count(3)->create();

        $response = $this->get(route('jenis-tarif.index'));

        $response->assertOk();
        $response->assertViewIs('jenisTarif.index');
        $response->assertViewHas('jenisTarifs');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('jenis-tarif.create'));

        $response->assertOk();
        $response->assertViewIs('jenisTarif.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\JenisTarifController::class,
            'store',
            \App\Http\Requests\JenisTarifStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $jenis_tarif = $this->faker->word;
        $coa_id = $this->faker->randomNumber();
        $tenant_id = $this->faker->randomNumber();

        $response = $this->post(route('jenis-tarif.store'), [
            'jenis_tarif' => $jenis_tarif,
            'coa_id' => $coa_id,
            'tenant_id' => $tenant_id,
        ]);

        $jenisTarifs = JenisTarif::query()
            ->where('jenis_tarif', $jenis_tarif)
            ->where('coa_id', $coa_id)
            ->where('tenant_id', $tenant_id)
            ->get();
        $this->assertCount(1, $jenisTarifs);
        $jenisTarif = $jenisTarifs->first();

        $response->assertRedirect(route('jenisTarif.index'));
        $response->assertSessionHas('jenisTarif.id', $jenisTarif->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $jenisTarif = JenisTarif::factory()->create();

        $response = $this->get(route('jenis-tarif.show', $jenisTarif));

        $response->assertOk();
        $response->assertViewIs('jenisTarif.show');
        $response->assertViewHas('jenisTarif');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $jenisTarif = JenisTarif::factory()->create();

        $response = $this->get(route('jenis-tarif.edit', $jenisTarif));

        $response->assertOk();
        $response->assertViewIs('jenisTarif.edit');
        $response->assertViewHas('jenisTarif');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\JenisTarifController::class,
            'update',
            \App\Http\Requests\JenisTarifUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $jenisTarif = JenisTarif::factory()->create();
        $jenis_tarif = $this->faker->word;
        $coa_id = $this->faker->randomNumber();
        $tenant_id = $this->faker->randomNumber();

        $response = $this->put(route('jenis-tarif.update', $jenisTarif), [
            'jenis_tarif' => $jenis_tarif,
            'coa_id' => $coa_id,
            'tenant_id' => $tenant_id,
        ]);

        $jenisTarif->refresh();

        $response->assertRedirect(route('jenisTarif.index'));
        $response->assertSessionHas('jenisTarif.id', $jenisTarif->id);

        $this->assertEquals($jenis_tarif, $jenisTarif->jenis_tarif);
        $this->assertEquals($coa_id, $jenisTarif->coa_id);
        $this->assertEquals($tenant_id, $jenisTarif->tenant_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $jenisTarif = JenisTarif::factory()->create();

        $response = $this->delete(route('jenis-tarif.destroy', $jenisTarif));

        $response->assertRedirect(route('jenisTarif.index'));

        $this->assertDeleted($jenisTarif);
    }
}
