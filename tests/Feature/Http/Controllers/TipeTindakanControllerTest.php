<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\TipeTindakan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TipeTindakanController
 */
class TipeTindakanControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $tipeTindakans = TipeTindakan::factory()->count(3)->create();

        $response = $this->get(route('tipe-tindakan.index'));

        $response->assertOk();
        $response->assertViewIs('tipeTindakan.index');
        $response->assertViewHas('tipeTindakans');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('tipe-tindakan.create'));

        $response->assertOk();
        $response->assertViewIs('tipeTindakan.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TipeTindakanController::class,
            'store',
            \App\Http\Requests\TipeTindakanStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $tipe_tindakan = $this->faker->word;
        $keterangan = $this->faker->word;
        $tenant_id = $this->faker->randomNumber();

        $response = $this->post(route('tipe-tindakan.store'), [
            'tipe_tindakan' => $tipe_tindakan,
            'keterangan' => $keterangan,
            'tenant_id' => $tenant_id,
        ]);

        $tipeTindakans = TipeTindakan::query()
            ->where('tipe_tindakan', $tipe_tindakan)
            ->where('keterangan', $keterangan)
            ->where('tenant_id', $tenant_id)
            ->get();
        $this->assertCount(1, $tipeTindakans);
        $tipeTindakan = $tipeTindakans->first();

        $response->assertRedirect(route('tipeTindakan.index'));
        $response->assertSessionHas('tipeTindakan.id', $tipeTindakan->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $tipeTindakan = TipeTindakan::factory()->create();

        $response = $this->get(route('tipe-tindakan.show', $tipeTindakan));

        $response->assertOk();
        $response->assertViewIs('tipeTindakan.show');
        $response->assertViewHas('tipeTindakan');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $tipeTindakan = TipeTindakan::factory()->create();

        $response = $this->get(route('tipe-tindakan.edit', $tipeTindakan));

        $response->assertOk();
        $response->assertViewIs('tipeTindakan.edit');
        $response->assertViewHas('tipeTindakan');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TipeTindakanController::class,
            'update',
            \App\Http\Requests\TipeTindakanUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $tipeTindakan = TipeTindakan::factory()->create();
        $tipe_tindakan = $this->faker->word;
        $keterangan = $this->faker->word;
        $tenant_id = $this->faker->randomNumber();

        $response = $this->put(route('tipe-tindakan.update', $tipeTindakan), [
            'tipe_tindakan' => $tipe_tindakan,
            'keterangan' => $keterangan,
            'tenant_id' => $tenant_id,
        ]);

        $tipeTindakan->refresh();

        $response->assertRedirect(route('tipeTindakan.index'));
        $response->assertSessionHas('tipeTindakan.id', $tipeTindakan->id);

        $this->assertEquals($tipe_tindakan, $tipeTindakan->tipe_tindakan);
        $this->assertEquals($keterangan, $tipeTindakan->keterangan);
        $this->assertEquals($tenant_id, $tipeTindakan->tenant_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $tipeTindakan = TipeTindakan::factory()->create();

        $response = $this->delete(route('tipe-tindakan.destroy', $tipeTindakan));

        $response->assertRedirect(route('tipeTindakan.index'));

        $this->assertDeleted($tipeTindakan);
    }
}
