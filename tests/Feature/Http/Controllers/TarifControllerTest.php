<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TarifController
 */
class TarifControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $tarifs = Tarif::factory()->count(3)->create();

        $response = $this->get(route('tarif.index'));

        $response->assertOk();
        $response->assertViewIs('tarif.index');
        $response->assertViewHas('tarifs');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('tarif.create'));

        $response->assertOk();
        $response->assertViewIs('tarif.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TarifController::class,
            'store',
            \App\Http\Requests\TarifStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $jenis_tarif_id = $this->faker->randomNumber();
        $biaya = $this->faker->numberBetween(-10000, 10000);
        $asuransi_id = $this->faker->randomNumber();
        $fee_dokter = $this->faker->numberBetween(-10000, 10000);
        $fee_asisten_tindakan = $this->faker->numberBetween(-10000, 10000);
        $tipe_tindakan_id = $this->faker->randomNumber();
        $tenant_id = $this->faker->randomNumber();

        $response = $this->post(route('tarif.store'), [
            'jenis_tarif_id' => $jenis_tarif_id,
            'biaya' => $biaya,
            'asuransi_id' => $asuransi_id,
            'fee_dokter' => $fee_dokter,
            'fee_asisten_tindakan' => $fee_asisten_tindakan,
            'tipe_tindakan_id' => $tipe_tindakan_id,
            'tenant_id' => $tenant_id,
        ]);

        $tarifs = Tarif::query()
            ->where('jenis_tarif_id', $jenis_tarif_id)
            ->where('biaya', $biaya)
            ->where('asuransi_id', $asuransi_id)
            ->where('fee_dokter', $fee_dokter)
            ->where('fee_asisten_tindakan', $fee_asisten_tindakan)
            ->where('tipe_tindakan_id', $tipe_tindakan_id)
            ->where('tenant_id', $tenant_id)
            ->get();
        $this->assertCount(1, $tarifs);
        $tarif = $tarifs->first();

        $response->assertRedirect(route('tarif.index'));
        $response->assertSessionHas('tarif.id', $tarif->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $tarif = Tarif::factory()->create();

        $response = $this->get(route('tarif.show', $tarif));

        $response->assertOk();
        $response->assertViewIs('tarif.show');
        $response->assertViewHas('tarif');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $tarif = Tarif::factory()->create();

        $response = $this->get(route('tarif.edit', $tarif));

        $response->assertOk();
        $response->assertViewIs('tarif.edit');
        $response->assertViewHas('tarif');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TarifController::class,
            'update',
            \App\Http\Requests\TarifUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $tarif = Tarif::factory()->create();
        $jenis_tarif_id = $this->faker->randomNumber();
        $biaya = $this->faker->numberBetween(-10000, 10000);
        $asuransi_id = $this->faker->randomNumber();
        $fee_dokter = $this->faker->numberBetween(-10000, 10000);
        $fee_asisten_tindakan = $this->faker->numberBetween(-10000, 10000);
        $tipe_tindakan_id = $this->faker->randomNumber();
        $tenant_id = $this->faker->randomNumber();

        $response = $this->put(route('tarif.update', $tarif), [
            'jenis_tarif_id' => $jenis_tarif_id,
            'biaya' => $biaya,
            'asuransi_id' => $asuransi_id,
            'fee_dokter' => $fee_dokter,
            'fee_asisten_tindakan' => $fee_asisten_tindakan,
            'tipe_tindakan_id' => $tipe_tindakan_id,
            'tenant_id' => $tenant_id,
        ]);

        $tarif->refresh();

        $response->assertRedirect(route('tarif.index'));
        $response->assertSessionHas('tarif.id', $tarif->id);

        $this->assertEquals($jenis_tarif_id, $tarif->jenis_tarif_id);
        $this->assertEquals($biaya, $tarif->biaya);
        $this->assertEquals($asuransi_id, $tarif->asuransi_id);
        $this->assertEquals($fee_dokter, $tarif->fee_dokter);
        $this->assertEquals($fee_asisten_tindakan, $tarif->fee_asisten_tindakan);
        $this->assertEquals($tipe_tindakan_id, $tarif->tipe_tindakan_id);
        $this->assertEquals($tenant_id, $tarif->tenant_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $tarif = Tarif::factory()->create();

        $response = $this->delete(route('tarif.destroy', $tarif));

        $response->assertRedirect(route('tarif.index'));

        $this->assertDeleted($tarif);
    }
}
